<?php
// プラグインの名前
$string['pluginname'] = 'データベースコメント通知';

// 通知の内容
$string['commentnotification_subject'] = 'データベースエントリに新しいコメントが投稿されました';
$string['commentnotification_fullmessage'] = '{$a->fullname} さん、\n\n{$a->commentauthor} さんがあなたのデータベースエントリに新しいコメントを投稿しました。以下のリンクから確認してください。\n\n{$a->entryurl}\n\nよろしくお願いします。\nMoodleチーム';
$string['commentnotification_fullmessagehtml'] = '<p>{$a->fullname} さん、</p><p>{$a->commentauthor} さんがあなたのデータベースエントリに新しいコメントを投稿しました。以下のリンクから確認してください。</p><p><a href="{$a->entryurl}">エントリを表示</a></p><p>よろしくお願いします。<br>Moodleチーム</p>';
$string['commentnotification_smallmessage'] = '{$a->commentauthor} さんがあなたのデータベースエントリに新しいコメントを投稿しました。';