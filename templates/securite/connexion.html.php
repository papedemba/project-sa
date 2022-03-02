<?php
require_once(PATH_VIEWS."include/header.html.php");
?>
        <div id="container">
            <div id="connexion"><h1>Connexion</h1></div>
            <!-- zone de connexion -->
            
             <form action="<?=PATH_POST?>" method="post">
                <input type="hidden" name="controller" value="securite">
                <input type="hidden" name="action" value="connexion" >
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit1' name="connexion">
                <!-- <input type="submit" id='submit2' value='s inscrire pour jouer' > -->
            </form>
        </div>
<?php
require_once(PATH_VIEWS."include/footer.html.php");
?>
   
