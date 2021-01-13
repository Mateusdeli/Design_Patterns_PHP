<?php

namespace Alura\DesignPattern\Log;

class FileLogWritter implements LogWritter
{

    private $arquivo;

    public function __construct(string $caminhoArquivo) {
        $this->arquivo = fopen($caminhoArquivo, 'a+');
    }

    public function log(string $mensagemLog): void
    {
        fwrite($this->arquivo, $mensagemLog . PHP_EOL);
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}
