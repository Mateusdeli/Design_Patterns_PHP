<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Orcamento;

class NotaFiscalServicoBuilder
{

    private NotaFiscalBuilder $notaFiscalBuilder;

    public function __construct(NotaFiscalBuilder $notaFiscalBuilder) {
        $this->notaFiscalBuilder = $notaFiscalBuilder;
    }

    public function build(Imposto $imposto): NotaFiscal
    {
        $this->notaFiscalBuilder->getNotaFiscal()->valorImpostos = $this->calcularValorDoImpostaNota($imposto, $this->notaFiscalBuilder->getNotaFiscal()->orcamento);
        return $this->notaFiscalBuilder->getNotaFiscal();
    }

    private function calcularValorDoImpostaNota(Imposto $imposto, Orcamento $orcamento): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}
