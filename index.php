<?php

include_once('app/bootstrap.php');

BootStrap::start();

// lance la fonction statique qui permet d'avoir des constantes déclarées dans un autre fichier et l'autoload

require('controller/router.php');

// envoi vers le routeur, fichier qui va gérer l'affichage des pages



