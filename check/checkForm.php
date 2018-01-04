<?php
require '../includes/pdo.php';

session_start();

try {
    if (isset ($_POST)) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $dateNaissance = $_POST['dateNaissance'];
        $email = $_POST['email'];
        $membre = $_POST['membre'];
        $valide = 1;

        $jeux = "";
        foreach ($_POST['jeux'] as $jeu) {
            $jeux = $jeux . " " . $jeu;
        }

        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['adresse'] = $adresse;
        $_SESSION['cp'] = $cp;
        $_SESSION['ville'] = $ville;
        $_SESSION['dateNaissance'] = $dateNaissance;
        $_SESSION['email'] = $email;

        $sql = "INSERT INTO inscriptions (civilite, nom, prenom, adresse, cp, ville, dateNaissance, email, membre, jeux, valide) 
                VALUES ('$civ', '$nom', '$prenom', '$adresse', '$cp', '$ville', '$dateNaissance', '$email', '$membre', '$jeux', '$valide')";

        $prep = $pdo->prepare($sql);
        $prep->execute();

        var_dump($prep);
        header('location: ../admin.php');
    }
} catch (PDOException $e) {
    echo $e;
}
