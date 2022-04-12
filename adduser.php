<?php include 'header.php'; 

if(isset($_POST['ok'])){

    

    $email = $_POST['email'];
    $pass = $_POST['mdp'];

   

    $req = "INSERT INTO user(email,mdp) VALUES('$email','$pass')";
    $result = mysqli_query($conn,$req);

    //requete for selectionne toutes les elements d'une ligne de la base et la table
    $req1 = "SELECT * FROM  user WHERE email=' $email'";

    $resu = mysqli_query($conn,$req1);
    if($resu) {
        if($row = mysqli_fetch_array($resu)){  //recoit le booleen et le 
            echo '
            <div class="alert alert-warning alert-dismissable" role = "alert" align="center">
                <h3>
                    <span class="glyphicon glyphicon-info-sign ></span>
                     <br>
                     ATTENTION <strong> Email déja utilisé </strong>
                     Ajout impossible
                    <br>
                    <button type="button" class="btn btn-default" data-dismiss = "alert" area-label = "Close">
                        <a href="javascript:history.go(-1)">OK</a>
                    </button>
            
                </h3>
            
            </div>';
            
        }else{

            if(!$result){
                 echo '
                <div class="alert alert-warning  alert-dismissable" role = "alert" align="center">
                    <h3>
                        <span class="glyphicon glyphicon-info-sign"></span>
                        <br>
                        ATTENTION <strong>email échec insertion </strong>
                        Ajout impossible
                        <br>
                        <button class="btn btn-default" type="button" data-dismiss = "alert" area-label = "class">
                            <a href="javascript:history.go(-1)">OK</a>
                        </button>
                    
                    </h3>
                
                </div>';
            }else{
                header('location:connectuser.php');
            }
        }
    }

    if(!$result){
        echo "echec de l'insertion";
    }else{
        header("location:connectuser.php");
    }


}



?>
