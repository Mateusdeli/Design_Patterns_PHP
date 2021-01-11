<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedidos\GeradorPedidos;
use Alura\DesignPattern\Pedidos\TemplatePedidos;
use Alura\DesignPattern\Pedidos\Pedido;

require 'vendor/autoload.php';

$geradorPedidos = new GeradorPedidos();

for ($i = 0; $i < 10000; $i++) {
    $orcamento = new Orcamento();
    $geradorPedidos->gerarPedido('Mateus Deli', date('Y-m-d'), $orcamento);
}

echo memory_get_peak_usage();
