<?php

namespace Alura\DesignPattern\Log;

abstract class LogManager
{
    
    public function log(string $nivelLog, string $mensagemLog)
    {
        $dataAtual = date('d/m/Y');
        $mensagemFormatada = "[$dataAtual][$nivelLog]: $mensagemLog";
        ($this->createLog())->log($mensagemFormatada);
    }

    abstract public function createLog(): LogWritter;
}