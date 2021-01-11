<?php

namespace Alura\DesignPattern\Log;

class FileLogManager extends LogManager
{

    private string $path;

    public function __construct(string $path) {
        $this->path = $path;
    }

    public function criarLogWritter(): LogWritter
    {
        return new FileLogWritter($this->path);
    }
}
