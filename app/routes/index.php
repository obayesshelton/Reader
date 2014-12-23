<?php

/**
 * Authentication Routes
 */
/*$router->add("/", array(
    'controller' => 'index',
    'action'     => 'index'
));*/

$router->add("/landing", array(
    'controller' => 'index',
    'action'     => 'landing'
));

$router->add("/source/{sourceName:[a-zA-Z]+}", array(
    'controller' => 'index',
    'action'     => 'source'
));

$router->add("/search", array(
    'controller' => 'index',
    'action'     => 'search'
));