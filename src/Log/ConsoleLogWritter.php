<?php

namespace Alura\DesignPattern\Log;

class ConsoleLogWritter implements LogWritter
{
    public function log(string $mensagemLog): void
    {
        echo "$mensagemLog";
    }
}
