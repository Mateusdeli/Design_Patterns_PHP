<?php

use Alura\DesignPattern\Venda\VendaProdutoFactory;
use Alura\DesignPattern\Venda\VendaServicoFactory;

require_once __DIR__ . '/vendor/autoload.php';

$vendaFactory = new VendaProdutoFactory(1000);
$vendaServico = $vendaFactory->criarVenda();
$impostoVendaSerivo = $vendaFactory->imposto();

var_dump($vendaServico, $impostoVendaSerivo);
