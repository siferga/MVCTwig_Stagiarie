<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//On appelle la fonction getAll() 
$offresDao = new OffresDAO(); // connexion bdd
/* @var $alloffers type */
$alloffers = $offresDao->getAll(); // récupération de toutes les offres récupéré dans tableau d'offres
//On affiche le template Twig correspondant
echo $twig->render('offres.html.twig', ['alloffers' => $alloffers]);
// tableau transféré dans variable twig et on appelle le html spécial avec twig
