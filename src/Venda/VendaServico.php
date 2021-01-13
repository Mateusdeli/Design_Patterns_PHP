<?php

namespace Alura\DesignPattern\Venda;

class VendaServico extends Venda
{

    private string $nomePrestadorDeServico;

    public function __construct(\DateTimeInterface $dataDaVenda, string $nomePrestadorDeServico) {
        parent::__construct($dataDaVenda);
        $this->nomePrestadorDeServico = $nomePrestadorDeServico;
    }


}
