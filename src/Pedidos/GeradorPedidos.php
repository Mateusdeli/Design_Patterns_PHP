<?php

namespace Alura\DesignPattern\Pedidos;

use Alura\DesignPattern\Orcamento;

class GeradorPedidos
{
    
    private array $pedidos = [];

    public function gerarPedido(string $nomePedido, string $diaDoPedido, Orcamento $orcamento) : Pedido
    {
        $pedido = new Pedido();
        var_dump($this->pedidos);
        $pedido->dados = $this->gerarTemplatePedido($nomePedido, $diaDoPedido, $orcamento);
        $pedido->orcamento = $orcamento;
        return $pedido;
    }  

    private function gerarTemplatePedido(string $nomePedido, string $diaDoPedido)
    {
        $hash = md5($nomePedido . $diaDoPedido);

        if (!array_key_exists($hash, $this->pedidos)) {
            $templatePedidos = new TemplatePedidos($nomePedido, new \DateTimeImmutable($diaDoPedido));
            $this->pedidos[$hash] = $templatePedidos;
        }

        return $this->pedidos[$hash];
    }

}
