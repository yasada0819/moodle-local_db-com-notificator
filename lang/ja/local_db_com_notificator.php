<?php
// プラグインの名前
$string['pluginname'] = 'データベースコメント通知';

// 通知の内容
$string['commentnotification_subject'] = 'データベースエントリに新しいコメントが投稿されました';
$string['commentnotification_fullmessage'] = '{$a->fullname} さん、\n\n{$a->commentauthor} さんがあなたのデータベースエントリに新しいコメントを投稿しました。以下のリンクから確認してください。\n\n{$a->entryurl}\n\nよろしくお願いします。\nMoodleチーム';
$string['commentnotification_fullmessagehtml'] = '<p>{$a->fullname} さん、</p><p>{$a->commentauthor} さんがあなたのデータベースエントリに新しいコメントを投稿しました。以下のリンクから確認してください。</p><p><a href="{$a->entryurl}">エントリを表示</a></p><p>よろしくお願いします。<br>Moodleチーム</p>';
$string['commentnotification_smallmessage'] = '{$a->commentauthor} さんがあなたのデータベースエントリに新しいコメントを投稿しました。';

// 設定画面

$string['pluginname'] = 'DBコメント通知';
$string['notify_database'] = 'データベースのコメント通知';
$string['notify_database_desc'] = 'データベースモジュールのコメントに対する通知を有効にします。';
$string['notify_glossary'] = '用語集のコメント通知';
$string['notify_glossary_desc'] = '用語集モジュールのコメントに対する通知を有効にします。';
$string['notify_assign'] = '課題のコメント通知';
$string['notify_assign_desc'] = '課題モジュールのコメントに対する通知を有効にします。';

