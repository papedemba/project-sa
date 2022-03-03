<?php
require_once(PATH_VIEWS."include/header.html.php");
if(isset($_SESSION['errors'])){
    $errors=$_SESSION['errors'];
    unset($_SESSION['errors']);
    }
?>
        <div id="container">
            <div id="connexion"><h1>Connexion</h1></div>
            <!-- zone de connexion -->
            <?php if(isset($errors['connexion'])):?>
<span style="color:red;font-size:13px"><?=$errors['connexion'];?></span>
<?php endif ?>
            
             <form action="<?=PATH_POST?>" method="post">
                <input type="hidden" name="controller" value="securite">
                <input type="hidden" name="action" value="connexion" >
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" >
                <?php if(isset($errors['login'])):?>
<span style="color:red;font-size:13px"><?=$errors['login']?></span>
                <?php endif ?>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" >
                <?php if(isset($errors['password'])):?>
<span style="color:red;font-size:13px"><?=$errors['password']?></span>
                <?php endif ?>

               <div class="btn"> 
                   <input type="submit" id='submit1' name="connexion">
                 <!-- <input type="submit" id='submit2' value='s inscrire ' >  -->
                 </div>
            </form>
        </div>
<?php
require_once(PATH_VIEWS."include/footer.html.php");
?>
   
