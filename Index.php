<!DOCTYPE html>

<!-- choses a faire

informations : voir https://www.facebook.com/events/189882631576619/?active_tab=discussion
- date a inventer (17-18 originelement)
- 19:00 - 06:00
- ECE Paris Ecole d'Ingenieur, Immeuble Pollux 37 Quai de grenelle 71520,75015 Paris
-->

<html lang="fr,en">
<head>
    <?php require 'includes/header.html'; ?>
    <link rel="stylesheet" href="./style/Index.css" media="screen,projection" type="text/css">
    <title>Deuxième Soirée Jeux</title>
</head>
<body class="container-fluid">
<header>
    <div class="row">
        <div class="col-xs-offset-1 col-xs-4">
            <img src="./images/bandeau.jpg" class="img-responsive center-block">
        </div>
        <div class="col-xs-4 col-xs-offset-2">
            <div class="row">
                <div class="col-xs-7">
                    <!--            bloc authentifcation-->
                </div>
                <div class="col-xs-5">
                    <img src="./images/avatar.png" class="img-responsive center-block avatar">
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <h1>Bienvenue</h1>
    <?php if (isset ($_SESSION['admin'])){ echo " <p> Admin = true </p>";} ?>
    <a href="login.php">Se connecter</a>
    <div class="container">
        <div class="row">
            <div class="col-xs-3">
                <img src="./images/iconeGG.jpg" class="img-responsive center-block">

            </div>
            <div class="col-xs-9">

            </div>
        </div>
    </div>
</main>
<aside>

</aside>
<footer>


</footer>
</body>
</html>