<?php

$loader = new \Phalcon\Loader();

$loader->registerNamespaces(
    array(
        "Service" => $config->application->servicesDir,
        "Forms"   => $config->application->formsDir,
    )
);

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
	array(
		$config->application->controllersDir,
		$config->application->pluginsDir,
        $config->application->routesDir,
        $config->application->libraryDir,
        $config->application->viewsDir,
        $config->cache->cacheDir,
        $config->application->modelsDir,
	)
)->register();