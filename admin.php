<!DOCTYPE html>
<html lang="fr,en">
<head>
    <?php require 'includes/head.html'; ?>
    <title>Bar des MJ</title>
</head>
<body>
<?php require 'includes/header.html'; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-offset-1 col-xs-10 MainC center">
            <div class="row left top">
                <?php
                session_start();
                require 'includes/pdo.php';
                if (!isset($_SESSION['admin'])) {
                    header('location: login.php');
                } else {
                    ?>
                    <a href="logout.php">Retour à la taverne</a>
            </div>
            <div class="row left">
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
                            <form method="get" action="check/validerInscription.php">
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
                            echo "<p>" . $inscrit['civilite'] . " " . $inscrit['nom'] . " " . $inscrit['prenom'] . " "
                                . $inscrit['adresse'] . " " . $inscrit['cp'] . " " . $inscrit['ville'] . " " . $inscrit['dateNaissance'] . " " . $inscrit['email'] . " "
                                . $inscrit['membre'] . " " . $inscrit['jeux'] . "</p>";

                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>