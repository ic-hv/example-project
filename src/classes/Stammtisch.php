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

   public static function getTimeString() {
      return (new DateTime())->format(DATE_ATOM);
   }

   public function greeting() {
<<<<<<< HEAD
      foreach($this->teilnehmer as $teilnehmer) {
         echo 'Sei gegrüßt, ' . $teilnehmer->getName() . "\n";
=======
      echo 'Zeitpunkt des Stammtischs: ' . self::getTimeString() ."\n\n";
      for($i=1; $i<=$this->teilnehmer; $i++) {
         echo 'Sei gegrüßt, Interkörper ' . $i . "\n";
>>>>>>> 9e3a96e... [TASK] Stammtisch-Zeitpunkt ergänzen
      }
   }
}
