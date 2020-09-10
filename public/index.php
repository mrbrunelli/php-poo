<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Conta;
use Alfa\Util\Date;

$minhaConta = new Conta(1, 'João', 500.00);
dump($minhaConta->sacar(600.00));
$minhaContaDosSonhos = new Conta(2, 'José', 1_000_000_000.00);
$minhaContaDosSonhos->tranferir($minhaConta, 500_000.00);
echo $minhaConta->pegaSaldo();
dump($minhaConta);
dump($minhaContaDosSonhos);
dump(Conta::$movimentacoes);