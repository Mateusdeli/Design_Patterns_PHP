<?php

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Impostos\Iss;
use DateTimeImmutable;

class VendaServicoFactory implements VendaImposto
{

    private string $nomeDoPrestador; 

    public function __construct(string $nomeDoPrestador) {
        $this->nomeDoPrestador = $nomeDoPrestador;
    }
    
    public function criarVenda(): Venda
    {
        return new VendaServico(new DateTimeImmutable(), $this->nomeDoPrestador);
    }

    public function imposto(): Imposto
    {
        return new Iss();
    }

}
