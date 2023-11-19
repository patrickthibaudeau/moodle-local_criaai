<?php

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_criaai_settings', get_string('pluginname', 'local_criaai'));

    $settings->add(new admin_setting_configtext(
        'cria_server_url',
        get_string('cria_server_url', 'local_criaai'),
        get_string('cria_server_url_help', 'local_criaai'),
        '',
        PARAM_TEXT
    ));

    $settings->add(new admin_setting_configpasswordunmask(
        'cria_token',
        get_string('cria_token', 'local_criaai'),
        get_string('cria_token_help', 'local_criaai'),
        '',
        PARAM_TEXT
    ));

    $ADMIN->add('localplugins', $settings);

}





