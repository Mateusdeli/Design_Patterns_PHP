<?php

use Alura\DesignPattern\PdoConnection;

require_once __DIR__ . '/vendor/autoload.php';

$pdoConnection = PdoConnection::getInstance();
$pdoConnection2 = PdoConnection::getInstance();

var_dump($pdoConnection, $pdoConnection2);