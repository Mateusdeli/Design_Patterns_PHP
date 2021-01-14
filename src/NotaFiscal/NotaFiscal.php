<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\Orcamento;
use DateTimeImmutable;
use DateTimeInterface;

class NotaFiscal
{
    public string $cnpj;
    public string $razaoSocial;
    public Orcamento $orcamento;
    public DateTimeInterface $dataEmissao;
    public string $observacoes;
    public float $valorImpostos;

    public function valor(): float
    {
        return $this->orcamento->valor();
    }
  
}
