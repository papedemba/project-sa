<?php
require_once(PATH_SRC.'models'.DIRECTORY_SEPARATOR.'user.model.php');  
if($_SERVER['REQUEST_METHOD']=="POST"){
 if(isset($_POST['action'])){
}
}
/**
* Traitement des Requetes GET
*/
if($_SERVER['REQUEST_METHOD']=="GET"){
 if(isset($_REQUEST['action'])){
     if(!is_connect){
        if($_REQUEST['action']==liste.joueur);
        lister_joueur();
         header("location:".WEBROOT);
         exit();
     }
     if($_REQUEST['action']=='accueil'){
        require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'accueil.html.php'); 
     }
    // elseif($_REQUEST['action']==liste.joueur){
         lister_joueur();
     }

}
else{
    echo "page de connexion";
}
}
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_REQUEST['action'])){
    }
}
 
function lister_joueur(){
  
    $data=find_users("ROLE_JOUEUR");
   // require_once(PATH_VIEWS."user/liste.joueur.html.php");
    }
    /* if($_SERVER['REQUEST_METHOD']=="GET"){
        if(isset($_GET['action'])){
        if ($_GET['action']=="accueil") {
        $first_lien="Dashboard";
        $sub_lien="Home";
        //Chargement des Vues de Users
        if(isset($_GET['view'])){
        switch ($variable) {
        case 'liste.joueur':
        ob_start();
        require_once(PATH_VIEWS."user/liste.joueur.html.php");
        $content_for_template= ob_get_clean();
        break;}
        }else{
        ob_start();
        $data=lister_joueur();
        require_once(PATH_VIEWS."user/liste.joueur.html.php");
        $content_for_template= ob_get_clean();
        }
        require_once(PATH_VIEWS."user/accueil.html.php");
        }
        }
        } */