<?php

namespace Src\Aposentadoria\Models;

class Usuario {
 protected int $idade; 
 protected int $tempoDeTrabalho;

 public function __construct(int $idade, int $tempoDeTrabalho)
 {
   $this->idade = $idade;
   $this->tempoDeTrabalho = $tempoDeTrabalho;
 }

 /*
  * @return bool 
  * */
 public function checkIsRetired(): bool
 {
    return $this->tempoDeTrabalho >= 30 || $this->idade >= 65;
 }
}
