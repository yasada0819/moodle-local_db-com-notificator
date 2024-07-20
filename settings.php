<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_db_com_notificator', get_string('pluginname', 'local_db_com_notificator'));

    $settings->add(new admin_setting_configcheckbox(
        'local_db_com_notificator/notify_database',
        get_string('notify_database', 'local_db_com_notificator'),
        get_string('notify_database_desc', 'local_db_com_notificator'),
        1
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_db_com_notificator/notify_glossary',
        get_string('notify_glossary', 'local_db_com_notificator'),
        get_string('notify_glossary_desc', 'local_db_com_notificator'),
        1
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_db_com_notificator/notify_assign',
        get_string('notify_assign', 'local_db_com_notificator'),
        get_string('notify_assign_desc', 'local_db_com_notificator'),
        1
    ));

    $ADMIN->add('localplugins', $settings);
}