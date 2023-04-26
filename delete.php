<?php
include "cnx.php";

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "DELETE FROM `formulaire` WHERE `id`=:id;";

    $query = $db->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    
    header('Location: tab.php');
}

//require_once('close.php');
$db = null; // déconnexion fichier
?>
