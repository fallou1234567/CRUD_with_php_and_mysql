<?php 
session_start();
if (isset($_SESSION['id'])) {   
    header("location:affichage.php");
}
include 'header.php'; ?>

<div class="container col-md-6 col-md-offset-3">

    <div class="panel panel-primary">

        <div class="panel panel-heading ">
            <h4 align="center"><em>CONNEXION USER</em></h4>

        </div>

        <div class="panel panel-body">

            <form action="connectadmin.php" method="POST" class="form">
                <div class="form-group">
                    <label for="email" class="label-control">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="password" class="label-control">Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="Password">
                </div>
                <div class="form-group" align="center">
                    <button class="btn btn-success" type="submit" name="ok">Valider</button>
                    <button class="btn btn-danger" type="reset" name="reset">Annuler</button>
                    <button class="btn btn-info"><a href="inscripuser.php">Inscription</a></button> 
                </div>

            </form>

            

        </div>

    </div>

</div>



<?php include 'footer.php'; ?>