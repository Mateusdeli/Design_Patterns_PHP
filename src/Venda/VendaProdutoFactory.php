<?php

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Imposto;
use DateTimeImmutable;

class VendaProdutoFactory implements VendaImposto
{

    private int $pesoDoProduto;
    
    public function __construct(int $pesoDoProduto) {
        $this->pesoDoProduto = $pesoDoProduto;
    }

    public function criarVenda(): Venda
    {
        return new VendaProduto(new DateTimeImmutable(), $this->pesoDoProduto);
    }

    public function imposto(): Imposto
    {
        return new Icms();
    }
}
