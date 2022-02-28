<?php

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "accueil") {
            $first_lien = "Dashboard";
            $sub_lien = "Home";
            //Chargement des Vues de Users
            require_once(PATH_VIEWS . "user/accueil.html.php");
        }
    }
}



if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "accueil") {
            $first_lien = "Dashboard";
            $sub_lien = "Home";
            //Chargement des Vues de Users
            if (isset($_GET['view'])) {
                switch ($variable) {
                    case 'liste.joueur':
                        ob_start();
                        require_once(PATH_VIEWS . "user/liste.joueur.html.php");
                        $content_for_template = ob_get_clean();
                        break;
                }
            } else {
                ob_start();
                $data = lister_joueur();
                require_once(PATH_VIEWS . "user/liste.joueur.html.php");
                $content_for_template = ob_get_clean();
            }
            require_once(PATH_VIEWS . "user/accueil.html.php");
        }
    }
}
