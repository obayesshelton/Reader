<?php

/**
 * Authentication Routes
 */
$router->add("/", array(
    'controller' => 'index',
    'action'     => 'index'
));

$router->add("/source/{sourceName:[a-zA-Z]+}", array(
    'controller' => 'index',
    'action'     => 'source'
));