<?php

namespace Alura\DesignPattern\Log;

interface LogWritter
{
    public function log(string $mensagemLog): void;
}