<?php

// Initialisation de l'environnement
require './config/config.init.php';

require _CTRL_ . 'header.php';

// Gestion de Routing
if (isset($_GET['action']) && file_exists(_CTRL_ . $_GET['action'] . '.php')) {
    require _CTRL_ . $_GET['action'] . '.php';
} elseif (isset($_GET['action']) && !file_exists(_CTRL_ . $_GET['action'] . '.php')) {
    require _CTRL_ . 'erreur.php';
} else {
    require _CTRL_ . 'offres.php';
}

require _CTRL_ . 'footer.php';
