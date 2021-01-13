<?php

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Imposto;

interface VendaImposto
{
    public function criarVenda(): Venda;
    public function imposto(): Imposto;
}