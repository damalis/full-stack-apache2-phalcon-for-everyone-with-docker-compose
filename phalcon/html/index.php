<?php

use Phalcon\Autoload\Loader;

define('BASE_PATH', dirname(__DIR__));
// ...

$loader = new Loader();

$loader->registerNamespaces(
    [
        'Phalcon' => 'vendor/phalcon/incubator/Library/Phalcon/',
    ]
);

$loader->register();
