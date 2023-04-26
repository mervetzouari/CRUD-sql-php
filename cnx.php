<?php

$dsn='mysql:host=localhost;dbname=inscription';
$dbuser='root';
$dbpass='';
try {
    $db=new PDO($dsn,$dbuser,$dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // on peut l ajouter si nn il existe par defaux
    //echo'you are connected';
}
catch(PDOException $e) {
    echo 'failed' . $e->getMessage();
}

?>