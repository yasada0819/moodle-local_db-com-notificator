<?php
// プラグインの名前
$string['pluginname'] = 'Comment Notifications';

// 通知の内容
$string['commentnotification_subject'] = 'New comment on your {$a->context} entry';
$string['commentnotification_fullmessage'] = 'Hello {$a->fullname},\n\nA new comment has been posted on your {$a->context} entry by {$a->commentauthor}. Please check it out at the following URL:\n\n{$a->entryurl}\n\nBest regards,\nYour Moodle Team';
$string['commentnotification_fullmessagehtml'] = 'Hello {$a->fullname},<br><br>A new comment has been posted on your {$a->context} entry by {$a->commentauthor}. Please check it out at the following URL:<br><br><a href="{$a->entryurl}">{$a->entryurl}</a><br><br>Best regards,<br>Your Moodle Team';
$string['commentnotification_smallmessage'] = 'A new comment has been posted on your {$a->context} entry by {$a->commentauthor}.';

// setting screen
$string['pluginname'] = 'DB Com Notificator';
$string['notify_database'] = 'Notify on database comments';
$string['notify_database_desc'] = 'Enable notifications for comments in the database module.';
$string['notify_glossary'] = 'Notify on glossary comments';
$string['notify_glossary_desc'] = 'Enable notifications for comments in the glossary module.';
$string['notify_assign'] = 'Notify on assignment comments';
$string['notify_assign_desc'] = 'Enable notifications for comments in the assignment module.';

