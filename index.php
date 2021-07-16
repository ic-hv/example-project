<?php

require_once 'src/autoload.php';

$stammtisch = new Stammtisch();
$stammtisch->addTeilnehmer('Manuel');
$stammtisch->addTeilnehmer('Björn');
$stammtisch->addTeilnehmer('Kim');
$stammtisch->addTeilnehmer('Andreas');
$stammtisch->addTeilnehmer('Thomas');
$stammtisch->addTeilnehmer('Alex');
$stammtisch->addTeilnehmer('Dennis');
$stammtisch->addTeilnehmer('Helmut');

$stammtisch->greeting();
