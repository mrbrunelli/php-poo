<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Heranca\Funcionario;
use Alfa\Heranca\Gerente;

$funcionario = new Funcionario('Matheus');
$gerente = new Gerente('José');
dump($funcionario->getBonificacao());
dump($gerente->getBonificacao());