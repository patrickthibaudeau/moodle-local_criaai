# moodle-local_criaai
## Description
This Moodle local plugin is required by other Cria Suite plugins. It consists of all settings required to connect to Cria
Suite API and to configure the plugins.

## Requirements
- Moodle 4.1 or later
- PHP 8.1 or later
- Access to Cria Suite 1.0 or later

## Installation
1. Copy the plugin code to `local/criaai`
2. Make sure you have the required parameters:
- cria_server_url
- cria_token
- cria_bot_server_url
- cria_bot_server_api_key
- cria_embedding_server_url
2. Go to Site Administration > Notifications to install the plugin
3. Go to Site Administration > Plugins > Local plugins > Cria Suite > Cria Suite API to configure the API connection