<?php

namespace Alura\DesignPattern\NotaFiscal;

use DateTimeImmutable;
use DateTimeInterface;

class NotaFiscal
{
    public string $cnpj;
    public string $razaoSocial;
    public array $itens;
    public DateTimeInterface $dataEmissao;
    public string $observacoes;
    public float $valorImpostos;

    public function valor(): float
    {
        return 0;
    }

  
}
