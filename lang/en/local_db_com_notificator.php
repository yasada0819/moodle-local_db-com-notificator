<?php
// プラグインの名前
$string['pluginname'] = 'Database Comment Notifications';

// 通知の内容
$string['commentnotification_subject'] = 'Your database entry has received a new comment';
$string['commentnotification_fullmessage'] = 'Hello {$a->fullname},\n\nA new comment has been posted on your database entry by {$a->commentauthor}. Please check it out using the following link:\n\n{$a->entryurl}\n\nBest regards,\nYour Moodle Team';
$string['commentnotification_fullmessagehtml'] = '<p>Hello {$a->fullname},</p><p>A new comment has been posted on your database entry by {$a->commentauthor}. Please check it out using the following link:</p><p><a href="{$a->entryurl}">View Entry</a></p><p>Best regards,<br>Your Moodle Team</p>';
$string['commentnotification_smallmessage'] = 'A new comment has been posted on your database entry by {$a->commentauthor}.';