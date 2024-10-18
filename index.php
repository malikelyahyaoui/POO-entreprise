<h1>POO Exercises</h1>

<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$elanFormation = new Entreprise("ELAN FORMATION","1993-01-01","14 rue du Rhône","67100","STRASBOURG");
echo $elanFormation->getRaisonSociale()." a été crée le ".$elanFormation->getDatecreation()->format
("d.m.Y")." et se situe à l'adresse suivante ".$elanFormation->getAdresseComplete();