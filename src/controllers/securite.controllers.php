
<?php
require_once(PATH_SRC.'models'.DIRECTORY_SEPARATOR.'user.model.php');

/**
* Traitement des Requetes POST
*/
if($_SERVER['REQUEST_METHOD']=='POST'){
    
     if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == "connexion"){
            $login=$_POST['login'];
            $password=$_POST['password'];
            connexion($login,$password);
        }
    }

}

/**
* Traitement des Requetes GET
*/
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['action'])){
        if($_GET['action'] =='connexion')
        {
            require_once(PATH_VIEWS.'securite'.DIRECTORY_SEPARATOR.'connexion.html.php');
        }
    }else{
        require_once(PATH_VIEWS.'securite'.DIRECTORY_SEPARATOR.'connexion.html.php');
    }

}
//connexion
function connexion(string $login,string $password):void {
    $errors=[];
    champ_obligatoire("login",$login,$errors);
    if(!isset($errors['login'])){
        valid_email("login",$login,$errors);
    }
        champ_obligatoire("password",$password,$errors);
    if(!isset($errors['login'])){
        valid_password("password",$password,$errors);
    }
    if(count($errors)==0){
        $userConnect=find_user_login_password($login,$password);
    if(count($userConnect)!=0){
        $_SESSION[USER_KEY]=$userConnect;  
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'accueil.html.php');

    // header("location:".WEBROOT."?controller=user&action=accueil");
    exit();
    }else{
    $errors['connexion']="Login ou Mot de passe incorrect";
    $_SESSION['errors']=$errors;
    header("location:".WEBROOT);
    exit();
    }
    }else{
    $_SESSION['errors']=$errors;
    header("location:".WEBROOT);
    exit();
    }
    }
    /* function logout():void{
        $_SESSION['user_connect']=array();
        unset($_SESSION['user_connect']);
        session_destroy();
        header("location:".WEBROOT);
        exit();
        } */