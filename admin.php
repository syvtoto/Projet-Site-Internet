<!DOCTYPE html>
<html lang="fr,en">
<head>
    <?php require 'includes/header.html'; ?>
    <link rel="stylesheet" href="./style/Index.css" media="screen,projection" type="text/css">
    <title>Admin Page</title>
</head>
<body>
<h1>Gestion des inscriptions</h1>
<?php
session_start();
require 'includes/pdo.php';
?>
<a href="logout.php">Se déconnecter</a>
<?php

//Affichage pour admin
$sql = 'SELECT * FROM inscriptions WHERE valide = 1';
$prep = $pdo->prepare($sql);
$prep->execute();
$inscrits = $prep->fetchAll();

foreach ($inscrits as $inscrit) {
    echo "<p>".$inscrit['nom'] . " " . $inscrit['prenom']."</p>";
}

?>
</body>
</html>