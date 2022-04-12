<?php 
include 'header.php';

$id=$_GET['mamo'];
$delete="DELETE FROM user WHERE id_user='$id'";
$result = mysqli_query($conn,$delete);
if (!$result) {
	echo "mauvaise suppression";   
}else{
	header('location: affichage.php');
}



?>