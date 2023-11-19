<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_configtext(
        'cria_server_url',
        get_string('cria_server_url', 'local_criaai'),
        get_string('cria_server_url_help', 'local_criaai'),
        '',
        PARAM_TEXT
    ));

    $settings->add(new admin_setting_configtext(
        'cria_token',
        get_string('cria_token', 'local_criaai'),
        get_string('cria_token_help', 'local_criaai'),
        'us-south',
        PARAM_TEXT
    ));

    $settings->add(new admin_setting_configtext(
        'cria_bot_server_url',
        get_string('cria_bot_server_url', 'local_criaai'),
        get_string('cria_bot_server_url_help', 'local_criaai'),
        '',
        PARAM_TEXT
    ));

    $settings->add(new admin_setting_configtext(
        'cria_bot_server_api_key',
        get_string('bot_server_api_key', 'local_criaai'),
        get_string('bot_server_api_key_help', 'local_criaai'),
        '',
        PARAM_TEXT
    ));

    $settings->add(new admin_setting_configtext(
        'cria_embedding_server_url',
        get_string('embedding_server_url', 'local_criaai'),
        get_string('embedding_server_url_help', 'local_criaai'),
        '',
        PARAM_TEXT
    ));


}





