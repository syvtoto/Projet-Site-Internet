<?php

try {
    require 'includes/pdo.php';

    //grain de sel de complexification de hashage
    $salt = "ece";

    session_start();

    $sql = 'SELECT login, password FROM users';

    $results = $pdo->query($sql)->fetchAll();


    if (isset ($_POST)) {
        $sql = 'SELECT * FROM users WHERE login = :login AND password = :password LIMIT 1';
        $prep = $pdo->prepare($sql);
        $prep->bindValue(':login', $_POST['login']);
        $prep->bindValue(':password', sha1($_POST['pw'] . $salt));
        $prep->execute();
        $user = $prep->fetch();

        if ($user) {
            $_SESSION['admin'] = true;
            $_SESSION['user_id'] = $user['id'];

            header('location:index.html.php');
            exit;
        }

        foreach ($results as $user) {

            if ($_POST['login'] == $user['login'] && $_POST['pw'] == $user['password']) {
                if ($_POST['login'] == "Admin"){$_SESSION['admin'] = true;}
                $_SESSION['login'] = $_POST['login'];

                header('location:index.html.php');
                exit;
            }
        }
    }
}
catch (PDOException $e){
    echo $e;
}
