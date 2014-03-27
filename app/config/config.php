<?php

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'  => 'mysql',
        'host'     => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'reader',
    ),
    'application' => array(
        'controllersDir' => __DIR__ . '/../../app/controllers/',
        'servicesDir'    => __DIR__ . '/../../app/service/',
        'routesDir'      => __DIR__ . '/../../app/routes/',
        'modelsDir'      => __DIR__ . '/../../app/mappers/',
        'libraryDir'     => __DIR__ . '/../../app/library/',
        'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        'viewsDir'       => __DIR__ . '/../../app/views/',
        'tasksDir'       => __DIR__ . '/../../app/cli/tasks/',
        'baseUri'        => '/'
    ),
    'cache' => array(
        'cacheDir' => "../app/cache/",
        "lifetime" => 1
    ),
));
