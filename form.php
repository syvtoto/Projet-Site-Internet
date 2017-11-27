<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'includes/header.html'; ?>
    <title>Formulaires</title>
</head>
<body>
<form method="post" action="checkForm.php">
    <p>
        <input type="radio" id="M" name="civ" value="M"> <label for="M">M</label>
        <input type="radio" id="Mme" name="civ" value="Mme"> <label for="Mme">Mme</label>
        <input type="radio" id="Mlle" name="civ" value="Mlle"> <label for="Mlle">Mlle</label>
    </p>
    <p>
        <label for="nom">Entrez votre nom :</label>
        <input type="text" id="nom" name="nom">
    </p>
    <p>
        <label for="prenom">Entrez votre prenom :</label>
        <input type="text" id="prenom" name="prenom">
    </p>
    <p>
        <label for="adresse">Entrez votre Adresse :</label>
        <input type="text" id="adresse" name="adresse">
    </p>
    <p>
        <label for="cp">Entrez votre code postal :</label>
        <input type="text" id="cp" name="cp" maxlength="5" size="5">
    </p>
    <p>
        <label for="ville">Entrez votre ville :</label>
        <input type="text" id="ville" name="ville">
    </p>
    <p>
        <label for="dateNaissance">Votre date de naissance :</label>
        <input type="date" id="dateNaissance" name="dateNaissance">
    </p>
    <p>
        <label for="email">Entrez votre adresse mail :</label>
        <input type="email" id="email" name="email">
    </p>
    <p>
        Êtes-vous membre ?
        <input type="radio" id="Oui" name="membre" value="1"> <label for="Oui">Oui</label>
        <input type="radio" id="Non" name="membre" value="0"> <label for="Non">Non</label>
    </p>
    <p>
        Jeux : </br>
        <input name="jeux[]" type="checkbox" id ="jdc" value="jdc"> <label for="jdc">Cartes</label>
        <input name="jeux[]" type="checkbox" id ="jdp" value="jdp"> <label for="jdp">Plateau</label>
        <input name="jeux[]" type="checkbox" id ="jdr" value="jdr"> <label for="jdr">Jeu de Rôle</label>
        </select>
    </p>
    <button type="submit">S'inscrire</button>
</form>
</body>
</html>