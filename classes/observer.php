<?php
namespace local_db_com_notificator;

defined('MOODLE_INTERNAL') || die();

class observer {
    public static function comment_created(\core\event\comment_created $event) {
        global $DB;

        $commentdata = $event->get_data();

        $entryid = $commentdata['other']['itemid'];
        $userid = $commentdata['userid']; // コメント投稿者のID

        $entry = $DB->get_record('data_records', array('id' => $entryid), '*', MUST_EXIST);
        $entryauthor = $DB->get_record('user', array('id' => $entry->userid), '*', MUST_EXIST);
        $commentauthor = $DB->get_record('user', array('id' => $userid), '*', MUST_EXIST);

        if ($entryauthor->id == $userid) {
            return;
        }

        $message = new \core\message\message();
        $message->component = 'local_db_com_notificator';
        $message->name = 'commentnotification';
        $message->userfrom = \core_user::get_support_user();
        $message->userto = $entryauthor;

        $a = new \stdClass();
        $a->fullname = fullname($entryauthor);
        $a->entrytitle = $entry->name;
        $a->commentauthor = fullname($commentauthor); // コメント投稿者のフルネームを取得

        $message->subject = get_string('commentnotification_subject', 'local_db_com_notificator');
        $message->fullmessage = get_string('commentnotification_fullmessage', 'local_db_com_notificator', $a);
        $message->fullmessageformat = FORMAT_MARKDOWN;
        $message->fullmessagehtml = get_string('commentnotification_fullmessagehtml', 'local_db_com_notificator', $a);
        $message->smallmessage = get_string('commentnotification_smallmessage', 'local_db_com_notificator', $a);

        $message->notification = 1;

        try {
            $result = message_send($message);
        } catch (\Exception $e) {
            // エラーハンドリング
        }
    }
}