<?php

namespace Alura\DesignPattern\NotaFiscal;

use DateTimeImmutable;
use DateTimeInterface;

class NotaFiscal
{
    private string $cnpj;
    private string $razaoSocial;
    private array $itens;
    private DateTimeInterface $dataEmissao;
    private string $observacoes;
    private float $valorImpostos;

    public function __construct() {
        $this->itens = [];
        $this->dataEmissao = new DateTimeImmutable();
    }

    public function valor(): float
    {
        return 0;
    }

    public function cpnj(string $cnpj): self
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function razaoSocial(string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function addItem(string $nomeItem, float $valorItem): self
    {
        $this->itens = [
            'nome' => $nomeItem,
            'valor' => $valorItem
        ];
        return $this;
    }

    public function observacoes(string $observacoes): self
    {
        $this->observacoes = $observacoes;
        return $this;
    }

    public function valorImposto(float $valorImposto): self
    {
        $this->valorImpostos = $valorImposto;
        return $this;
    }
}
