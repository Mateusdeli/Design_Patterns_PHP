<?php

namespace Alura\DesignPattern\Log;

class FileLogWritter implements LogWritter
{
    private $file;

    public function __construct(string $path) {
        $this->file = fopen($path, 'a+');
    }

    public function log($mensagemFormatada): void
    {
        fwrite($this->file, $mensagemFormatada);
    }

    public function __destruct()
    {
        fclose($this->file);
    }
}
