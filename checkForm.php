<?php
    require 'includes/pdo.php';

    session_start();

    try {
        if (isset ($_POST)) {
            var_dump($_POST);
            $sql = 'INSERT INTO inscriptions (civilite, nom, prenom, adresse, cp, ville, dateNaissance, email, membre, valide) 
                  VALUES :civilite, :nom, :prenom, :adresse, :cp, :ville, :dateNaissance, :email, :membre,
                  :jeux, 1';
            $prep = $pdo->prepare($sql);
            $prep->bindValue(':civilite', $_POST['civ']);
            $prep->bindValue(':nom', $_POST['nom']);
            $prep->bindValue(':prenom', $_POST['prenom']);
            $prep->bindValue(':adresse', $_POST['adresse']);
            $prep->bindValue(':cp', $_POST['cp']);
            $prep->bindValue(':ville', $_POST['ville']);
            $prep->bindValue(':dateNaissance', $_POST['dateNaissance']);
            $prep->bindValue(':email', $_POST['email']);
            $prep->bindValue(':membre', (boolean) $_POST['membre']);
            $jeux = "";
            foreach ($_POST['jeux'] as $jeu){
                $jeux = $jeux. " ".$jeu;
            }
            $prep->bindValue(':jeux', $jeux);
            $prep->execute();
            $prep->debugDumpParams();
            exit();
            header('location: admin.php');
        }
    }
    catch (PDOException $e){
        echo $e;
    }
