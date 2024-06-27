<?php
defined('MOODLE_INTERNAL') || die();

$observers = [
    [
        'eventname'   => '\core\event\comment_created',
        'callback'    => 'local_db_com_notificator\observer::comment_created',
        'includefile' => '/local/db_com_notificator/classes/observer.php',
        'priority'    => 9999,
        'internal'    => false,
    ],
];