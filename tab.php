
<?php 
include "cnx.php";
// On écrit notre requête
$sql = 'SELECT * FROM `formulaire`';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);

$db = null; // déconnexion fichier
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau</title>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Liste des candidats</h1>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Adress</th>
      <th scope="col">Tel</th>
      <th scope="col">Sexe</th>
      <th scope="col">Action</th>
    </tr>
    </thead>
<tbody>
<?php
foreach($result as $formulaire){
?>

    <tr>
        <td><?= $formulaire['id'] ?></td>
        <td><?= $formulaire['Nom'] ?></td>
        <td><?= $formulaire['Prenom'] ?></td>
        <td><?= $formulaire['Adress'] ?></td>
        <td><?= $formulaire['Tel'] ?></td>
        <td><?= $formulaire['Sex'] ?></td>
        <td><a href="edit.php?id=<?= $formulaire['id'] ?>">Modifier</a>
         <a href=" delete.php?id=<?= $formulaire['id'] ?>"  onclick="return confirm('sure to delete !'); ">
          Supprimer </a>
        </td>
         </tr> 
  <?php
          }
        ?>
                   
  </tbody>
</table>
<p><p><a href='index.html'>ajouter condidat</a></p></p>
</body>
</html>