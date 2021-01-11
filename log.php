<?php

use Alura\DesignPattern\Log\ConsoleLogManager;
use Alura\DesignPattern\Log\FileLogManager;

require_once __DIR__ . '/vendor/autoload.php';

$consoleLog = new FileLogManager(__DIR__ . '/log.txt');
$consoleLog->log('info', 'teste');