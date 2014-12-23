<?php
/*
 * Define custom routes. File gets included in the router service definition.
 */
$router = new Phalcon\Mvc\Router();

$router->add('/confirm/{code}/{email}', array(
    'controller' => 'user_control',
    'action' => 'confirmEmail'
));

$router->add('/reset-password/{code}/{email}', array(
    'controller' => 'user_control',
    'action' => 'resetPassword'
));

$router->add('/about', array(
    'controller' => 'content',
    'action' => 'about'
));

$router->add('/terms', array(
    'controller' => 'content',
    'action' => 'terms'
));

$router->add('/faq', array(
    'controller' => 'content',
    'action' => 'faq'
));

$router->add('/advertise', array(
    'controller' => 'content',
    'action' => 'advertise'
));

$router->add('/search/{sourceName}', array(
        'controller' => 'search',
        'action' => 'index'
    ));

return $router;
