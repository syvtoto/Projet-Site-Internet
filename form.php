<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'includes/head.html'; ?>
    <title>Recrutement</title>
</head>
<body>
<?php require 'includes/header.html'; ?>
<?php session_start(); ?>
<form method="post" action="check/checkForm.php">
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-2 col-xs-8 MainC">
                <div class="row">
                    <div class="col-xs-12 center">
                        <h2>Bureaux des Recrutements</h2>
                    </div>
                    <div class="col-xs-12 center img">
                        <?php
                        if(isset($_SESSION['inscrit'])) {
                            if($_SESSION = true) {
                                echo "Votre engagement a été pris en compte et sera mis à l'épreuve";
                                $_SESSION = false;
                            }

                        }
                        ?>
                    </div>
                    <div class="col-xs-offset-3  col top left">
                        <input type="radio" id="M" name="civ" value="M"> <label for="M">M</label>
                        <input type="radio" id="Mme" name="civ" value="Mme"> <label for="Mme">Mme</label>
                        <input type="radio" id="Mlle" name="civ" value="Mlle"> <label for="Mlle">Mlle</label>
                    </div>
                    <div class="col-xs-offset-3  col top left">
                        <label for="nom">Entrez votre nom :</label>
                        <input type="text" id="nom" name="nom" value="<?php if (isset ($_SESSION['nom'])) {
                            echo $_SESSION['nom'];
                        } ?>">
                    </div>
                    <div class="col-xs-offset-3  col top left">
                        <label for="prenom">Entrez votre prenom :</label>
                        <input type="text" id="prenom" name="prenom"
                               value="<?php if (isset ($_SESSION['prenom'])) {
                                   echo $_SESSION['prenom'];
                               } ?>">
                    </div>
                    <div class="col-xs-offset-3  col top left">
                        <label for="adresse">Entrez votre Adresse :</label>
                        <input type="text" id="adresse" name="adresse"
                               value="<?php if (isset ($_SESSION['adresse'])) {
                                   echo $_SESSION['adresse'];
                               } ?>">
                    </div>
                    <div class="col-xs-offset-3  col top left">
                        <label for="cp">Entrez votre code postal :</label>
                        <input type="text" id="cp" name="cp" maxlength="5" size="5"
                               value="<?php if (isset ($_SESSION['cp'])) {
                                   echo $_SESSION['cp'];
                               } ?>">
                    </div>
                    <div class="col-xs-offset-3  col top left">
                        <label for="ville">Entrez votre ville :</label>
                        <input type="text" id="ville" name="ville"
                               value="<?php if (isset ($_SESSION['ville'])) {
                                   echo $_SESSION['ville'];
                               } ?>">
                    </div>
                    <div class="col-xs-offset-3  col top left">
                        <label for="dateNaissance">Votre date de naissance :</label>
                        <input type="date" id="dateNaissance" name="dateNaissance"
                               value="<?php if (isset ($_SESSION['dateNaissance'])) {
                                   echo $_SESSION['dateNaissance'];
                               } ?>">
                    </div>
                    <div class="col-xs-offset-3  col top left">
                        <label for="email">Entrez votre adresse mail :</label>
                        <input type="email" id="email" name="email" size="25"
                               value="<?php if (isset ($_SESSION['email'])) {
                                   echo $_SESSION['email'];
                               } ?>">
                    </div>
                    <div class="col-xs-offset-3  col-xs-3 top left">
                        <h5>Êtes-vous membre ?</h5>
                    </div>
                    <div class="col-xs-2 top left">
                        <input type="radio" id="Oui" name="membre" value="1"> <label for="Oui">Oui</label>
                    </div>
                    <div class="col-xs-2 top left">
                        <input type="radio" id="Non" name="membre" value="0"> <label for="Non">Non</label>
                    </div>
                    <div class="col-xs-offset-3 col-xs-6 left center">
                        <h4>Jeux :</h4>
                    </div>
                    <div class="col-xs-offset-2 col-xs-3 top left">
                        <input name="jeux[]" type="checkbox" id="jdc" value="jeu de carte"> <label
                                for="jdc">Cartes <img src="./images/miniatures/jeu-de-cartes.jpg"></label>
                    </div>
                    <div class="col-xs-3 top left">
                        <input name="jeux[]" type="checkbox" id="jdp" value="jeu de plateau"> <label
                                for="jdp">Plateau <img src="./images/miniatures/summonerWar.jpg"</label>
                    </div>
                    <div class="col-xs-3 top left">
                        <input name="jeux[]" type="checkbox" id="jdr" value="jeu de rôle"> <label for="jdr">Jeu
                            de
                            Rôle <img src="./images/miniatures/des-jeu-de-roles.jpg"</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 top center img">
                        <button type="submit">S'enrôler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>