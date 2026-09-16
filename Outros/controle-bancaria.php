<?php 

$nome = "Guilherme Rosa";
$saldo = 429.24;

$menu = "
1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair\n";

echo "*******************\n";
echo "Titular: $nome\n";
echo "Saldo atual: $saldo\n";
echo "*******************\n";

echo $menu;

$opcao = (int) fgets(STDIN);

while ($opcao != 4) {
    switch ($opcao) {
        case 1:
            echo "Seu saldo é $saldo\n";
            break;
        case 2:
              echo "Quanto deseja sacar?\n";
            $valor = (float) fgets(STDIN);

            if ($valor <= $saldo) {
                $saldo -= $valor;
            } else {
                echo "Saldo insuficiente!.\n";
            }

            break;
        case 3:
             echo "Quanto deseja depositar?\n";
            $valor = (float) fgets(STDIN);

            if ($valor > 0) $saldo += $valor;

            break;
        default:
            echo "Opção inválida.\n";
    }

    echo $menu;
    $opcao = (int) fgets(STDIN);
}

echo "Adeus";
