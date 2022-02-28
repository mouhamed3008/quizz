<?php

/**
 * Traitement des Requetes
POST
 */
var_dump($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "connexion") {
            echo "Charger la page de connexion";die;
        }
    }else{
        header("location:");
    }
}
/**
 * Traitement des Requetes GET
 */
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_GET['action'])) {
    }
}
