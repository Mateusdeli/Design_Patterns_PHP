<?php

namespace Alura\DesignPattern\Log;

class ConsoleLogManager extends LogManager
{
    public function createLog(): LogWritter
    {
        return new ConsoleLogWritter();
    }
}
