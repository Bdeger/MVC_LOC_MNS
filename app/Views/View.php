<?php 
// app/Views/View.php 

//creation de la class View qui permettra l'affichage 

class View{
    public function render($template, $data=[]){
        //extraire les données pour les utiliser dans les templates
        extract($data);

        //charger le contenu spécifique(ex:home/index.php)
        ob_start();
        require_once __DIR__ . '/templates/'.$template.'.php';
        $content = ob_get_clean();

        //charger le layout avec le contenu 
        require_once __DIR__ . '/templates/layout.php';
    }
}


?>