<?php
/*
 * 1- Include dependencies
 *
 * In the first step load composer and Pluf modules.
 */
require 'vendor/autoload.php';
require 'Pluf.php';

/*
 * 2- Load application configuration adn start
 *
 * To start the application you must pass configurations into the
 * Pluf. Configurations are stored in a seperate file.
 */
Pluf::start (array(
    'installed_apps' => array('Pluf'),
    'tmp_folder' => dirname(__FILE__).'/tmp'
));

/*
 * 3- Finally dispatch and process user request
 *
 * Send reques query and View maps into the Pluf dispatcher to process
 * user request.
 */
$action = Pluf_HTTP_URL::getAction ();
Pluf_Dispatcher::dispatch ($action, array(
    array(
        'regex' => '#^/message/send*$#',
        'model' => 'Pluf\Starter\Views',
        'method' => 'sendMessage',
    ),
    array(
        'regex' => '#^.*$#',
        'model' => 'Pluf\Starter\Views',
        'method' => 'hello',
    ),
));
