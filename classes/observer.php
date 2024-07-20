<?php
namespace local_db_com_notificator;

defined('MOODLE_INTERNAL') || die();

class observer {
    public static function comment_created($event) {
        global $DB, $CFG;

        // イベントデータの取得
        $commentdata = $event->get_data();

        // コメントIDとユーザーIDを取得
        $commentid = $commentdata['objectid'];
        $userid = $commentdata['userid'];

        // イベントの名前とコンポーネントを取得
        $eventname = $commentdata['eventname'];
        $component = $commentdata['component'];

        // 設定を取得
        $notify_database = get_config('local_db_com_notificator', 'notify_database');
        $notify_glossary = get_config('local_db_com_notificator', 'notify_glossary');
        $notify_assign = get_config('local_db_com_notificator', 'notify_assign');

        // 設定に基づいて通知を送信するか判断
        if ($component === 'mod_data' && $eventname === '\mod_data\event\comment_created' && !$notify_database) {
            return;
        }
        if ($component === 'mod_glossary' && $eventname === '\mod_glossary\event\comment_created' && !$notify_glossary) {
            return;
        }
        if ($component === 'assignsubmission_comments' && $eventname === '\assignsubmission_comments\event\comment_created' && !$notify_assign) {
            return;
        }

        // コメント情報を取得
        $comment = $DB->get_record('comments', array('id' => $commentid), '*', MUST_EXIST);
        $itemid = $comment->itemid;

        // エントリとユーザー情報を取得
        try {
            if ($component === 'mod_data' && $comment->commentarea === 'database_entry') {
                $entry = $DB->get_record('data_records', array('id' => $itemid), '*', MUST_EXIST);
                $context = 'データベース';
            } elseif ($component === 'mod_glossary' && $comment->commentarea === 'glossary_entry') {
                $entry = $DB->get_record('glossary_entries', array('id' => $itemid), '*', MUST_EXIST);
                $context = '用語集';
            } elseif ($component === 'assignsubmission_comments' && $comment->commentarea === 'submission_comments') {
                $entry = $DB->get_record('assign_submission', array('id' => $itemid), '*', MUST_EXIST);
                $cm = get_coursemodule_from_instance('assign', $entry->assignment);
                $context = '課題';
            } else {
                return;
            }
        } catch (\Exception $e) {
            return;
        }

        // ユーザー情報を取得
        try {
            $entryauthor = $DB->get_record('user', array('id' => $entry->userid), '*', MUST_EXIST);
            $commentauthor = $DB->get_record('user', array('id' => $userid), '*', MUST_EXIST);
        } catch (\Exception $e) {
            return;
        }

        // エントリのURLを生成
        try {
            if ($component === 'mod_data' && $comment->commentarea === 'database_entry') {
                $entryurl = new \moodle_url('/mod/data/view.php', array('d' => $entry->dataid, 'rid' => $itemid));
            } elseif ($component === 'mod_glossary' && $comment->commentarea === 'glossary_entry') {
                $entryurl = new \moodle_url('/mod/glossary/view.php', array('g' => $entry->glossaryid, 'eid' => $itemid));
            } elseif ($component === 'assignsubmission_comments' && $comment->commentarea === 'submission_comments') {
                $entryurl = new \moodle_url('/mod/assign/view.php', array('id' => $cm->id));
            }
        } catch (\Exception $e) {
            return;
        }

        if ($entryauthor->id == $userid) {
            return;
        }

        // メッセージ送信
        try {
            $message = new \core\message\message();
            $message->component = 'local_db_com_notificator';
            $message->name = 'commentnotification';
            $message->userfrom = \core_user::get_support_user();
            $message->userto = $entryauthor;

            $a = new \stdClass();
            $a->fullname = fullname($entryauthor);
            $a->entryurl = $entryurl->out(); // エントリのURLを取得
            $a->commentauthor = fullname($commentauthor); // コメント投稿者のフルネームを取得
            $a->context = $context;

            $message->subject = get_string('commentnotification_subject', 'local_db_com_notificator', $a);
            $message->fullmessage = get_string('commentnotification_fullmessage', 'local_db_com_notificator', $a);
            $message->fullmessageformat = FORMAT_MARKDOWN;
            $message->fullmessagehtml = get_string('commentnotification_fullmessagehtml', 'local_db_com_notificator', $a);
            $message->smallmessage = get_string('commentnotification_smallmessage', 'local_db_com_notificator', $a);

            $message->notification = 1;

            message_send($message);
        } catch (\Exception $e) {
            // エラーハンドリング
        }
    }
}