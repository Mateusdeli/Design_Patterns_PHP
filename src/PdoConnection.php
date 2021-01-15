<?php

namespace Alura\DesignPattern;

use PDO;

class PdoConnection extends PDO
{
    private static $instance;

    private function __construct(string $dsn, string $username = null, string $passwd = null) {
        parent::__construct($dsn, $username, $passwd);
    }

    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new PdoConnection('sqlite:memory;', 'root', '');
        }

        return self::$instance;
    }
}
