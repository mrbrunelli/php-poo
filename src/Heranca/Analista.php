<?php

declare(strict_types=1);

namespace Alfa\Heranca;

class Analista extends Funcionario
{
  public function getBonificacao(): float
  {
    return parent::getBonificacao() * 1.15;
  }
}
