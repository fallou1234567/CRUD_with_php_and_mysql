<?php 
   include 'header.php';

   $id=$_GET['id'];
   if (isset($_POST['ok'])) {
   	$nom= $_POST['nom'];
   	$prenom= $_POST['prenom'];
   	$age= $_POST['age'];
   	
   	if (isset($id)) {
   		$resul= $conn->query("UPDATE emp SET nom='$nom',prenom='$prenom',age='$age' WHERE id_emp='$id' ");
   		if ($resul) {
   			header("location:affichage.php");
   		}else{
   			echo "ECHEC MISE A JOUR";
   		}
   	}

   }
  ?>