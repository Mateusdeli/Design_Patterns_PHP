<?php

namespace Alura\DesignPattern\Venda;

class VendaProduto extends Venda
{

    private int $pesoDoProduto;

    public function __construct(\DateTimeInterface $dataDaVenda, int $pesoDoProduto) {
        parent::__construct($dataDaVenda);
        $this->pesoDoProduto = $pesoDoProduto;
    }


}
