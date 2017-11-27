<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'includes/header.html'; ?>
    <title>Connexion</title>
</head>
<body>
<?php
session_start();
if (isset ($_SESSION['admin'])):
    echo "Vous êtes déjà connecté";
else :
    if (isset($_GET['error'])){
        switch ($_GET['error']) {
            case 'cahmpVide':
                $error = "Veuillez renseigner les champs";
                break;
            case 'falsePw' :
                $error ="Mauvais Mot de Passe";
                break;
            case 'falseLog' :
                $error ="Mauvaise Adresse Mail";
                break;
            default :
                $error = "Mauvais identifiants";
                break;
        }
        echo "Erreur : ".$error;

    }
    ?>
    <h1>Connexion</h1>
    <form method="post" action="check.php" enctype="multipart/form-data">
        <label for="login">Renseigner votre login :</label><br>
        <input id="login" name="login" type="text" placeholder="Login" required="true"
               value="<?php if (isset ($_GET['login'])){ echo  $_GET['login']; } ?>"></br>
        <label for="password">Entrez votre mot de passe :</label><br>
        <input id="password" name="pw" type="password" placeholder="Password"><br>
        <input type="submit" value="Se Connecter">
    </form>
<?php endif ;?>
</body>
</html>
