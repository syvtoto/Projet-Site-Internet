<!DOCTYPE html>
<html lang="fr,en">
<head>
    <?php require 'includes/head.html'; ?>
    <link rel="stylesheet" href="./style/Index.css" media="screen,projection" type="text/css">
    <title>Admin Page</title>
</head>
<br>
<h1>Gestion des inscriptions</h1>
<?php
session_start();
require 'includes/pdo.php';
if (!isset($_SESSION['admin'])) {
    header('location: login.php');
} else {
    ?>
    <a href="logout.php">Se déconnecter</a>
    <?php
//Affichage pour admin
    $sql = 'SELECT * FROM inscriptions ORDER BY valide';
    $prep = $pdo->prepare($sql);
    $prep->execute();
    $inscrits = $prep->fetchAll();
    ?>
    <h2>Participants à valider</h2>
    <?php
    foreach ($inscrits as $inscrit) {
        if ($inscrit['valide'] == 1) {
            $id = $inscrit['id'];
            echo "<p>" . $inscrit['civilite'] . " " . $inscrit['nom'] . " " . $inscrit['prenom'] . " "
                . $inscrit['adresse'] . " " . $inscrit['cp'] . " " . $inscrit['ville'] . " " . $inscrit['dateNaissance'] . " " . $inscrit['email'] . " "
                . $inscrit['membre'] . " " . $inscrit['jeux'];
            ?>
            <form method="get" action="check/valider.php">
                <button type="submit" name="valider" value="<?php echo $id; ?>">Valider</button>
                <button type="submit" name="refuser" value="<?php echo $id; ?>">Refuser</button>
            </form>
            <?php
        }
    }
    ?>
    <h2>Liste des participants</h2>
    <?php
    foreach ($inscrits as $inscrit) {
        if ($inscrit['valide'] == 2) {
            echo "<p>" . $inscrit['civilite'] . " " . $inscrit['nom'] . " " . $inscrit['prenom'] . " "
                . $inscrit['adresse'] . " " . $inscrit['cp'] . " " . $inscrit['ville'] . " " . $inscrit['dateNaissance'] . " " . $inscrit['email'] . " "
                . $inscrit['membre'] . " " . $inscrit['jeux'] . "</p>";
        }
    }
    ?>
    <h2>Participants refusés</h2>
    <?php
    foreach ($inscrits as $inscrit) {
        if ($inscrit['valide'] == 0) {
            echo "</br>la liste des participants refusés : </br>" . "<p>" . $inscrit['civilite'] . " " . $inscrit['nom'] . " " . $inscrit['prenom'] . " "
                . $inscrit['adresse'] . " " . $inscrit['cp'] . " " . $inscrit['ville'] . " " . $inscrit['dateNaissance'] . " " . $inscrit['email'] . " "
                . $inscrit['membre'] . " " . $inscrit['jeux'] . "</p>";

        }
    }
}
?>
</body>
</html>