<?php

class Stammtisch {

   /** @var Teilnehmer[] $teilnehmer */
   private $teilnehmer;

   public function __construct() {
      $this->teilnehmer = array();
   }

   public function addTeilnehmer($name) {
      $this->teilnehmer[] = new Teilnehmer($name);
   }

   public function greeting() {
      foreach($this->teilnehmer as $teilnehmer) {
         echo 'Sei gegrüßt, ' . $teilnehmer->getName() . "\n";
      }
   }
}
