<?php

/**
 * Disable the default Controller/Action error
 */
$router = new \Phalcon\Mvc\Router(false);

/**
 * Sets up the paths for the included routes
 */
$routes = glob(__DIR__ . "/../routes/*.php");

/**
 * for each route found in the $routes include the file
 */
foreach ($routes as $route) {
	include $route;
}

/**
 * Set 404 page
 */
$router->notFound(array(
    "controller" => "index",
    "action" => "fourofour"
));

return $router;