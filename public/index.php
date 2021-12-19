<?php
declare(strict_types=1);

require_once \dirname(__DIR__) . '/vendor/autoload.php';

$application = new \Ferror\Serwild\Core\Application();

$application->start();
