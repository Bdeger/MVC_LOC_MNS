<?php 
// app/Controllers/HomeController.php
// controleur spécifique pour la page d'acceuil/bienvenue

require_once __DIR__ . '/../Views/View.php'; //view avant pour qu'il soit chargé avant Controller
require_once __DIR__ . "/Controller.php";

class HomeController extends Controller{
    public function index():void{
        // afficher la page d'acceuil/bienvenue
        $this->view->render('home/index',[
            'title'=> 'Bienvenue -Loc MNS'
        ]);

    }
}

// Elle dit à View : "Affiche le template home/index avec le titre 'Bienvenue - LOC MNS'"
?>