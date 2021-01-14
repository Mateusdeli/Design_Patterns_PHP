<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\Orcamento;
use DateTimeImmutable;
use DateTimeInterface;

class NotaFiscalBuilder
{
    
    private NotaFiscal $notaFiscal;

    public function __construct() {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new DateTimeImmutable();
    }

    public function getNotaFiscal(): NotaFiscal
    {
        return $this->notaFiscal;
    }
    
    public function withEmpresa(string $cnpj, string $razaoSocial): self
    {
        $this->notaFiscal->cnpj = $cnpj;
        $this->notaFiscal->razaoSocial = $razaoSocial;
        return $this;
    }

    public function withOrcamento(Orcamento $orcamento): self
    {
        $this->notaFiscal->orcamento =  $orcamento;
        return $this;
    }

    public function withObservacoes(string $observacoes): self
    {
        $this->notaFiscal->observacoes = $observacoes;
        return $this;
    }

    public function withDataEmissao(DateTimeInterface $dataEmissao): self
    {
        $this->notaFiscal->dataEmissao = $dataEmissao;
        return $this;
    }

}
