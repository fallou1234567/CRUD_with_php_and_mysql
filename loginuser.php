<?php
session_start();
 include 'header.php';


if (isset($_POST['ok'])){

    $log = $_POST['email'];
    $pass = $_POST['password'];
    //recupération password in basedonnee
    $req = "SELECT * FROM user WHERE email = '$log'";
    //requete 
    $result = mysqli_query($conn,$req);

    if ($result) {
		if ($row = mysqli_fetch_array($result)) {
			if ($pass == $row['mdp']) {
				//echo "Bienvenue"." ".$row['nom']." ".$row['prenom'];
				/*echo '
				<div class="alert alert-success alert-dismissable" role = "alert" align="center">
					<h1>
						<strong>BIENVENUE  </strong>'.$row['nom']." ".$row['prenom'].' <br>Vos identifiants sont correct!
						<br>
						<button type="button" class="btn btn-success" data-dismiss = "alert" area-label = "Close">
							<span class=" glyphicon glyphicon-ok"></span>	
						</button>
					</h1>
				</div>';*/
				$_SESSION['id']=$row['id_emp'];
				$_SESSION['nom']=$row['nom'];

				header("location:affichage.php");
				exit;
			}else{
				//echo "mot de passe Invalide";
				echo '';?>
				<div class="alert alert-warning alert-dismissable" role = "alert" align="center">
					<h3>
						<span class=" glyphicon glyphicon-info-sign"></span>
						<br>
						ATTENTION <strong>Mot de passe invalide</strong> Vérifiez vos identifiants
						<br>
						<a href="javascript:history.go(-1)">
							<button type="button" class="btn btn-default" data-dismiss = "alert" area-label = "Close">
								OK	
							</button>
						</a>
					</h3>
				</div><?='';
			}
		}else{
			echo '
				<div class="alert alert-warning alert-dismissable" role = "alert" align="center">
					<h3>
						<span class=" glyphicon glyphicon-info-sign"></span>
						<br>
						ATTENTION <strong> Login Incorrect </strong> Vérifiez vos identifiants
						<br>
						<a href="javascript:history.go(-1)">
							<button type="button" class="btn btn-default" data-dismiss = "alert" area-label = "Close">
								OK	
							</button>
						</a>
					</h3>
				</div>';
		}
		
	}else{
		echo '
				<div class="alert alert-danger alert-dismissable" role = "alert" align="center">
					<h3>
						<span class=" glyphicon glyphicon-remove-sign"></span>
						<br>
						ATTENTION <strong>ERREUR DE REQUÊTE</strong>
						<br>
						<button type="button" class="btn btn-default" data-dismiss = "alert" area-label = "Close">
							<a href="javascript:history.go(-1)">OK</a>	
						</button>
					</h3>
				</div>';
	}
}
?>
