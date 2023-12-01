<?php

class Conta{
   private $numero;
   private $nome;
   private $saldo;

   function __construct($numero,$nome,$saldo){
      $this->definirNumero($numero);
      $this->definirNome($nome);
      $this->definirSaldo($saldo);
   }

   public function definirNumero($vlr) {
      $this->numero = $vlr;
   }

   public function retornarNumero() {
      return $this->numero;
   }

   public function definirNome($vlr) {
      $this->nome = $vlr;
   }

   public function retornarNome() {
      return $this->nome;
   }

   public function definirSaldo($vlr) {
      $this->saldo = $vlr;
   }

   public function retornarSaldo() {
      return 'R$' . $this->saldo;
   }

   public function retornarConta() {
      return [
         'numero' => $this->retornarNumero(),
         'nome'   => $this->retornarNome(),
         'saldo'  => $this->retornarSaldo()
      ];
   }
}

$conta = new Conta("960", "Dan", 216000);
$info = $conta->retornarConta();
