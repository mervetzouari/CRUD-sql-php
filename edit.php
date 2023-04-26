<?php
include "cnx.php";

if(isset($_POST)){
    if(isset($_POST['id']) && !empty($_POST['id'])
        && isset($_POST['Nom']) && !empty($_POST['Nom'])
        && isset($_POST['Prenom']) && !empty($_POST['Prenom'])
        && isset($_POST['Adress']) && !empty($_POST['Adress'])
        && isset($_POST['Tel']) && !empty($_POST['Tel'])
        && isset($_POST['Sex']) && !empty($_POST['Sex'])){
        $id = strip_tags($_GET['id']);
        $Nom = strip_tags($_POST['Nom']);
        $Prenom = strip_tags($_POST['Prenom']);
        $Adress = strip_tags($_POST['Adress']);
        $Tel = strip_tags($_POST['Tel']);
        $Sex = strip_tags($_POST['Sex']);
        $sql = "UPDATE `formulaire` SET `Nom`=:Nom, `Prenom`=:Prenom, `Adress`=:Adress, `Tel`=:Tel, `Sex`=:Sex WHERE `id`=:id;";

        $query = $db->prepare($sql);

        $query->bindValue(':Nom', $Nom, PDO::PARAM_STR);
        $query->bindValue(':Prenom', $Prenom, PDO::PARAM_STR);
        $query->bindValue(':Adress', $Adress, PDO::PARAM_STR);
        $query->bindValue(':Tel', $Tel, PDO::PARAM_STR);
        $query->bindValue(':Sex', $Sex, PDO::PARAM_STR);
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->execute();

        header('Location: tab.php');
    }
}

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "SELECT * FROM `formulaire` WHERE `id`=:id;";

    $query = $db->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch();
}

$db = null; // déconnexion fichier
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1>Modifier un produit</h1>
    <form method="post">
        <p>
            <label for="Nom">Nom</label>
            <input type="text" name="Nom" id="Nom" value="<?= $result['Nom'] ?>">
        </p>
        <p>
            <label for="Prenom">Prenom</label>
            <input type="text" name="Prenom" id="Prenom" value="<?= $result['Prenom'] ?>">
        </p>
        <p>
            <label for="Adress">Adress</label>
            <input type="text" name="Adress" id="Adress" value="<?= $result['Adress'] ?>">
        </p>
        <p>
            <label for="Tel">Tel</label>
            <input type="text" name="Tel" id="Tel" value="<?= $result['Tel'] ?>">
        </p>
        <p>
            <label for="Sex">Sex</label>
            <input type="text" name="Sex" id="Sex" value="<?= $result['Sex'] ?>">
        </p>
        <p>
            <button>Enregistrer</button>
        </p>
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
    </form>
</body>
</html>