<?php
declare(strict_types = 1);

namespace App;

require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

$environment = 'development';

$whoops = new \Whoops\Run;
if ($environment !== 'production') {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
} else {
    $whoops->pushHandler(function($e) {
        echo 'Whoops.  Something went wrong';
    });
}
$whoops->register();

throw new \Exception;
