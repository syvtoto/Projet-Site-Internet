<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'includes/head.html'; ?>
    <title>Acces MJ</title>
</head>
<body>
<?php
require 'includes/header.html';
session_start();
if (isset ($_SESSION['admin'])):
    session_destroy();
    header('location:index.php');
/*header('location :index.php');
echo "Vous êtes déjà connecté";*/
else :
?>
<div class="container">
    <div class="row">
        <div class="col-xs-offset-4 col-xs-4 MainC center">
            <div class="row">
                <div class="col img top">
                    <h1>Connexion</h1>
                    <form method="post" action="check/checkAdmin.php" enctype="multipart/form-data">
                </div>
                <div class="col img top">
                    <?php if (isset($_SESSION['error'])) {
                        echo "Mauvais identifiants";
                    }?>
                </div>
                <div class="col img top">
                    <label for="login">Nom :</label>
                </div>
                <div class="col img">
                    <input id="login" name="login" type="text" placeholder="Nom" required="true"
                           value="<?php if (isset ($_GET['login'])) {
                               echo $_GET['login'];
                           } ?>">
                </div>
                <div class="col img top">
                    <label for="password">Token :</label><br>
                </div>
                <div class="col img">
                    <input id="password" name="pw" type="password" placeholder="Token"><br>
                </div>
                <div class="col top img">
                    <input type="submit" value="Entrer">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</body>
</html>
