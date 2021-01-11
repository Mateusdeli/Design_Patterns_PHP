<?php

namespace Alura\DesignPattern\Log;

class ConsoleLogWritter implements LogWritter
{
    public function log($mensagemFormatada): void
    {
        echo $mensagemFormatada;
    }
}
