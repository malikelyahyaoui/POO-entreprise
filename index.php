<h1>POO Exercises</h1>

<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$elanFormation = new Entreprise("ELAN FORMATION","1993-01-01","14 rue du Rhône","67100",
"STRASBOURG");



echo $elanFormation;
echo $elanFormation->getInfos();
