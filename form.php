<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'includes/head.html'; ?>
<!--    <link rel="stylesheet" href="./style/border.css" media="screen,projection" type="text/css"> // si bordure-->
    <title>Inscription</title>
</head>
<<<<<<< HEAD
<body>
<?php session_start(); ?>
<form method="post" action="check/checkForm.php">
    <p>
        <input type="radio" id="M" name="civ" value="M"> <label for="M">M</label>
        <input type="radio" id="Mme" name="civ" value="Mme"> <label for="Mme">Mme</label>
        <input type="radio" id="Mlle" name="civ" value="Mlle"> <label for="Mlle">Mlle</label>
    </p>
    <p>
        <label for="nom">Entrez votre nom :</label>
        <input type="text" id="nom" name="nom" value="<?php if (isset ($_SESSION['nom'])){ echo  $_SESSION['nom']; } ?>">
    </p>
    <p>
        <label for="prenom">Entrez votre prenom :</label>
        <input type="text" id="prenom" name="prenom" value="<?php if (isset ($_SESSION['prenom'])){ echo  $_SESSION['prenom']; } ?>">
    </p>
    <p>
        <label for="adresse">Entrez votre Adresse :</label>
        <input type="text" id="adresse" name="adresse" value="<?php if (isset ($_SESSION['adresse'])){ echo  $_SESSION['adresse']; } ?>">
    </p>
    <p>
        <label for="cp">Entrez votre code postal :</label>
        <input type="text" id="cp" name="cp" maxlength="5" size="5" value="<?php if (isset ($_SESSION['cp'])){ echo  $_SESSION['cp']; } ?>">
    </p>
    <p>
        <label for="ville">Entrez votre ville :</label>
        <input type="text" id="ville" name="ville" value="<?php if (isset ($_SESSION['ville'])){ echo  $_SESSION['ville']; } ?>">
    </p>
    <p>
        <label for="dateNaissance">Votre date de naissance :</label>
        <input type="date" id="dateNaissance" name="dateNaissance" value="<?php if (isset ($_SESSION['dateNaissance'])){ echo  $_SESSION['dateNaissance']; } ?>">
    </p>
    <p>
        <label for="email">Entrez votre adresse mail :</label>
        <input type="email" id="email" name="email" size="25" value="<?php if (isset ($_SESSION['email'])){ echo  $_SESSION['email']; } ?>">
    </p>
    <p>
        Êtes-vous membre ?
        <input type="radio" id="Oui" name="membre" value="1"> <label for="Oui">Oui</label>
        <input type="radio" id="Non" name="membre" value="0"> <label for="Non">Non</label>
    </p>
    <p>
        Jeux : </br>
        <input name="jeux[]" type="checkbox" id ="jdc" value="jeu de carte"> <label for="jdc">Cartes</label>
        <input name="jeux[]" type="checkbox" id ="jdp" value="jeu de plateau"> <label for="jdp">Plateau</label>
        <input name="jeux[]" type="checkbox" id ="jdr" value="jeu de rôle"> <label for="jdr">Jeu de Rôle</label>
        </select>
    </p>
    <button type="submit">S'inscrire</button>
</form>
=======
<body class="container-fluid">
<header>
    <?php require 'includes/header.html'; ?>
</header>
<main>
    <form method="post" action="checkForm.php">
        <div class="container MainC">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col top left">
                            <input type="radio" id="M" name="civ" value="M"> <label for="M">M</label>
                            <input type="radio" id="Mme" name="civ" value="Mme"> <label for="Mme">Mme</label>
                            <input type="radio" id="Mlle" name="civ" value="Mlle"> <label for="Mlle">Mlle</label>
                        </div>
                        <div class="col top left">
                            <label for="nom">Entrez votre nom :</label>
                            <input type="text" id="nom" name="nom">
                        </div>
                        <div class="col top left">
                            <label for="prenom">Entrez votre prenom :</label>
                            <input type="text" id="prenom" name="prenom">
                        </div>
                        <div class="col top left">
                            <label for="adresse">Entrez votre Adresse :</label>
                            <input type="text" id="adresse" name="adresse">
                        </div>
                        <div class="col top left">
                            <label for="cp">Entrez votre code postal :</label>
                            <input type="text" id="cp" name="cp" maxlength="5" size="5">
                        </div>
                        <div class="col top left">
                            <label for="ville">Entrez votre ville :</label>
                            <input type="text" id="ville" name="ville">
                        </div>
                        <div class="col top left">
                            <label for="dateNaissance">Votre date de naissance :</label>
                            <input type="date" id="dateNaissance" name="dateNaissance">
                        </div>
                        <div class="col top left">
                            <label for="email">Entrez votre adresse mail :</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="col-xs-3 top left">
                            Êtes-vous membre ?
                        </div>
                        <div class="col-xs-3 top left">
                            <input type="radio" id="Oui" name="membre" value="1"> <label for="Oui">Oui</label>
                        </div>
                        <div class="col-xs-3 top left">
                            <input type="radio" id="Non" name="membre" value="0"> <label for="Non">Non</label>
                        </div>
                        <div class="col-xs-12 left">
                            <h4>Jeux :</h4>
                        </div>
                        <div class="col-xs-4 top left">
                            <input name="jeux[]" type="checkbox" id="jdc" value="jdc"> <label for="jdc">Cartes <img
                                        src="./images/jeu-de-cartes.jpg"></label>
                        </div>
                        <div class="col-xs-4 top left">
                            <input name="jeux[]" type="checkbox" id="jdp" value="jdp"> <label for="jdp">Plateau <img
                                        src="./images/summonerWar.jpg"></label>
                        </div>
                        <div class="col-xs-4 top left">
                            <input name="jeux[]" type="checkbox" id="jdr" value="jdr"> <label for="jdr">Jeu de Rôle <img
                                        src="./images/des-jeu-de-roles.jpg"></label>
                        </div>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-offset-5 col-xs-2 top">
                    <button type="submit">S'inscrire</button>
                </div>
            </div>
        </div>
    </form>
</main>
>>>>>>> 2bd5c4d902098c25217bfe9aca370b8c4518ef9c
</body>
</html>