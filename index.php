<?php

require_once 'personne.php';
$personne = new Personne('Raubitschek', 'Océane', '28-10-1990');

$personne ->setAddress(' Paris');

echo $personne->getInfo ();

echo '<br>';

echo $personne -> calculateAge();