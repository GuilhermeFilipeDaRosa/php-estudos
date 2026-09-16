<?php

require __DIR__ . "/ContaTipo.php";

class Conta
{
    private int $saldoEmCentavos = 0;
    private string $nomeTitular;
    private string $numeroConta;
    private ContaTipo $tipoConta = ContaTipo::Investimento;

    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

        public function depositarSaldo(int $saldoEmCentavos): void
    {
       if ($saldoEmCentavos > 0) $this->saldoEmCentavos += $saldoEmCentavos;
    }

    public function sacarSaldoEmCentavos(int $valor): void
    {
        if ($valor > $this->saldoEmCentavos) return;
         $this->saldoEmCentavos -= $valor;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    public function possuiTaxas(): bool {
        if ($this->tipoConta == ContaTipo::Corrente || $this->tipoConta == ContaTipo::Investimento) {
            return true;
        }

        return false;
    }

}

$conta = new Conta();

var_dump($conta);
var_dump($conta->possuiTaxas());