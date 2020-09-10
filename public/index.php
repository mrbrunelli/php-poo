<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Heranca\Analista;
use Alfa\Heranca\Funcionario;
use Alfa\Heranca\Gerente;
use Alfa\Heranca\CalculaBonificacao;

$calculaBonificacao = new CalculaBonificacao();
$funcionario = new Funcionario('João');
$gerente = new Gerente('José');
$analista = new Analista('Matheus');
dump($calculaBonificacao->calcula($funcionario));
dump($calculaBonificacao->calcula($gerente));
dump($calculaBonificacao->calcula($analista));
