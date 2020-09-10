<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Heranca\Funcionario;
use Alfa\Heranca\Gerente;
use Alfa\Heranca\CalculaBonificacao;

$calculaBonificacao = new CalculaBonificacao();
$funcionario = new Funcionario('Matheus');
$gerente = new Gerente('José');
dump($calculaBonificacao->calcula($funcionario));
dump($calculaBonificacao->calcula($gerente));