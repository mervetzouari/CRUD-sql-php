<?php
include "cnx.php";

//try { 
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // on peut l ajouter si nn il existe par defaux
   //$q="INSERT INTO formulaire VALUES(null,'" . $_POST['nom'] . "', '" . $_POST['Prenom'] . "', '" . $_POST['adress'] . "','" . $_POST['Tel'] . "','" . $_POST['sex'] . "' )"; // ajouter le nom oussama dans le tab students
    //$db->exec($q); //executer q dans le tableau students en phpmyadmin
    //echo'you are connected';
  
//}
//catch(PDOException $e) {
    //echo 'failed' . $e->getMessage();
//}


//echo '<script type="text/javascript">alert("Données Insérées")</script>' ;

if(isset($_POST['valider'])) {	
	$nom = $_POST['nom'];
	$Prenom = $_POST['Prenom'];
	$adress = $_POST['adress'];
    $Tel = $_POST['Tel'];
    $sex = $_POST['sex'];
	
	
	
	// checking empty fields
	if(empty($nom) || empty($Prenom) || empty($adress) || empty($Tel) || empty($sex)) {
		
		if(empty($nom)) {
			echo "<font color='red'>Nom field is empty.</font><br/>";
		}
		
		if(empty($Prenom)) {
			echo "<font color='red'>Prenom field is empty.</font><br/>";
		}
		
		if(empty($adress)) {
			echo "<font color='red'>adress field is empty.</font><br/>";
		}
        if(empty($Tel) ) {
			echo "<font color='red'>Tel field is empty.</font><br/>";	
			
		  }
        if(empty($sex)) {
			echo "<font color='red'>sex field is empty.</font><br/>";
		}
	
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		
		// if all the fields are filled (not empty) 
		
    
    try{
		//insert data to database		
	$sql = "INSERT INTO formulaire(nom, Prenom, adress,Tel,sex) VALUES(:nom, :Prenom, :adress, :Tel, :sex)";// ici j ai remplacer $query_check = 'SELECT * FROM Formulaire WHERE Tel = :Tel'; 
	//$stmt_check = $$db->prepare($query_check);
	//$stmt_check->bindValue(':Tel', $Tel);
	//$stmt_check->execute(); 
	// avec insert select en mm temps 

	$query = $db->prepare($sql);		
	$query->bindValue(':nom', $nom);
	$query->bindValue(':Prenom', $Prenom);
	$query->bindValue(':adress', $adress);
	$query->bindValue(':Tel', $Tel);
	$query->bindValue(':sex', $sex);
	$query->execute();}
	catch (Exception $e) {
		echo '<script type="text/javascript">'; 
		echo 'window.location.href = "index.html";';
		echo 'alert("this Tel already exists.");'; 
		echo 'javascript:window.history.back()';
		echo '</script>';
		

  }
		//Alternative to above bindparam and execute
		//$query->execute(array(':nom' => $nom, ':Prenom' => $Prenom, ':adress' => $adress, ':Tel' => $Tel, ':sex' => $sex));
		
		//display success message
		//echo  "<font color='green'>Data added successfully.</font>";
        //echo "<br/><a href='index.html'>Go Back</a>";
		
		//$message = "New record created successfully";
		//echo "<script type='text/javascript'>alert('$message');</script>";
		
		echo '<script type="text/javascript">'; 
		echo 'window.location.href = "index.html";';
		echo 'alert("Data added successfully.");';
		
		echo '</script>';
		
		
	}
	
	

	//header('refresh:10; index.html');
}
    //header('Location:index.html'); //retour a la page de formulaire apré submit 
    
?>

