<?php

if (isset($_POST['id'])) {
    $offresDao = new OffresDao();

    $status = $offresDao->deleteOffre((int) $_POST['id']);


    if ($status == 1) {
        echo $twig->render('supprimer_offre.html.twig', ['status' => "Suppression effectuée"]);
    } else {
        echo $twig->render('supprimer_offre.html.twig', ['status' => "Erreur lors de la suppression"]);
    }
}
