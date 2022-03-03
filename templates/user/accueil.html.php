
 <?php
require_once(PATH_VIEWS."include/header.html.php");
?>
    
     <div id="entete">
            <div id="vid">
                
            </div>
            <h1>creer et parametrer vos quiz</h1>
        <button><a href="<?=WEBROOT."controller=securite&action=deconnexion"?>"> deconnexion </a> </button>
     </div>
    <div id="all">
        <div id="const">
            <?php if(is_admin()):?>
                    <div id="profil">

                    </div>
             <div id="liste"> 
                <ul>
                    <li>creer admin</li>
                    <li>creer questions</li>
                    <li> <a href=""> liste des questions </a> </li>
                    <li> <a href="<?=WEBROOT."controller=securite&action=liste.joueur"?>">liste des Joueurs </a> </li> 
            
                </ul>
            </div>
        </div>
            <?php endif ?>
                 <div id="varie">

                </div>
        
    </div>

 <?php
require_once(PATH_VIEWS."include/footer.html.php");
?>
 