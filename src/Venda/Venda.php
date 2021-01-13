<?php

namespace Alura\DesignPattern\Venda;

abstract class Venda
{

    public \DateTimeInterface $dataDaVenda;

    public function __construct(\DateTimeInterface $dataDaVenda) {
        $this->dataDaVenda = $dataDaVenda;
    }

}
