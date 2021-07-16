<?php

class Stammtisch {

   private $teilnehmer;

   public function __construct($teilnehmer) {
      $this->teilnehmer = $teilnehmer;
   }

   public function greeting() {
      for($i=1; $i<=$this->teilnehmer; $i++) {
         echo 'Sei gegrüßt, Interkörper ' . $i . "\n";
      }
   }
}
