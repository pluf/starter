<?php
return array(
    
    array(
        'regex' => '#^/math/(?P<operator>.+)$#',
        'model' => 'Starter_Views_Math',
        'method' => 'run',
        'http-method' => array('POST')
    ),
    
    
    // Math
    array(
        'regex' => '#^/math/add/(?P<a>\d+)/(?P<b>\d+)$#',
        'model' => 'Starter_Views_Math',
        'method' => 'add',
    ),
    array(
        'regex' => '#^/math/multiple/(?P<a>\d+)/(?P<b>\d+)$#',
        'model' => 'Starter_Views_Math',
        'method' => 'multiple',
    ),
    
    // Example
    array(
        'regex' => '#^/echo/(?P<message>.+)$#',
        'model' => 'Starter_Views',
        'method' => 'echo',
    ),
    array(
        'regex' => '#^/by$#',
        'model' => 'Starter_Views',
        'method' => 'by',
    ),
    array(
        'regex' => '#^.*$#',
        'model' => 'Starter_Views',
        'method' => 'hello',
    ),
);



