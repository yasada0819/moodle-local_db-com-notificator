<?php
defined('MOODLE_INTERNAL') || die();

$messageproviders = array(
    // プラグインのメッセージングプロバイダを定義
    'commentnotification' => array(
        'capability' => 'moodle/site:sendmessage', // メッセージ送信のためのケイパビリティ
    ),
);