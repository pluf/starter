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
Pluf::start ('config.php' );

/*
 * 3- Finally dispatch and process user request
 * 
 * Send reques query and View maps into the Pluf dispatcher to process
 * user request.
 */
Pluf_Dispatcher::dispatch (Pluf_HTTP_URL::getAction (), 'urls.php');
