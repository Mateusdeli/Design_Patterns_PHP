<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\NotaFiscalBuilder;

require_once __DIR__ . '/vendor/autoload.php';

$notaFiscalBuilder = new NotaFiscalBuilder();

$notaFiscal = $notaFiscalBuilder
    ->withEmpresa('00.155.555/0001-10', 'Mateus Deli')
    ->withItem(new ItemOrcamento())
    ->withItem(new ItemOrcamento())
    ->withItem(new ItemOrcamento())
    ->withObservacoes('Esta é uma observacao qualquer')
    ->build();



