<?php

use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\NotaFiscalBuilder;
use Alura\DesignPattern\NotaFiscal\NotaFiscalServicoBuilder;
use Alura\DesignPattern\Orcamento;

require_once __DIR__ . '/vendor/autoload.php';


$item1 = new ItemOrcamento();
$item1->valor = 500;

$item2 = new ItemOrcamento();
$item2->valor = 1500;

$item3 = new ItemOrcamento();
$item3->valor = 1000;

$orcamento = new Orcamento();
$orcamento->addItem($item1);
$orcamento->addItem($item2);
$orcamento->addItem($item3);

$notaFiscalBuilder = (new NotaFiscalBuilder())
        ->withEmpresa('00.155.555/0001-10', 'Mateus Deli')
        ->withOrcamento($orcamento)
        ->withObservacoes('Esta é uma observacao qualquer');

$notaFiscalProdutoBuilder = (new NotaFiscalServicoBuilder($notaFiscalBuilder))
    ->build(new Iss());

$novaNotaFiscalProdutoBuilder = clone $notaFiscalProdutoBuilder;

echo $notaFiscalProdutoBuilder->valorImpostos;
echo $novaNotaFiscalProdutoBuilder->valorImpostos;