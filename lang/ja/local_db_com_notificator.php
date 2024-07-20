<?php
// プラグインの名前
$string['pluginname'] = 'コメント通知';

// 通知の内容
$string['commentnotification_subject'] = 'あなたの{$a->context}エントリに新しいコメントがあります';
$string['commentnotification_fullmessage'] = '{$a->fullname}さん、\n\nあなたの{$a->context}エントリに{$a->commentauthor}さんから新しいコメントが投稿されました。以下のURLで確認してください：\n\n{$a->entryurl}\n\nよろしくお願いします。\nMoodleチーム';
$string['commentnotification_fullmessagehtml'] = '{$a->fullname}さん、<br><br>あなたの{$a->context}エントリに{$a->commentauthor}さんから新しいコメントが投稿されました。以下のURLで確認してください：<br><br><a href="{$a->entryurl}">{$a->entryurl}</a><br><br>よろしくお願いします。<br>Moodleチーム';
$string['commentnotification_smallmessage'] = 'あなたの{$a->context}エントリに{$a->commentauthor}さんから新しいコメントが投稿されました。';

// 設定画面

$string['pluginname'] = 'DBコメント通知';
$string['notify_database'] = 'データベースのコメント通知';
$string['notify_database_desc'] = 'データベースモジュールのコメントに対する通知を有効にします。';
$string['notify_glossary'] = '用語集のコメント通知';
$string['notify_glossary_desc'] = '用語集モジュールのコメントに対する通知を有効にします。';
$string['notify_assign'] = '課題のコメント通知';
$string['notify_assign_desc'] = '課題モジュールのコメントに対する通知を有効にします。';

