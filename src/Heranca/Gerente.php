<?php

declare(strict_types=1);

namespace Alfa\Heranca;

class Gerente extends Funcionario
{
  public function getBonificacao(): float
  {
    return parent::getBonificacao() * 1.1;
  }
}
