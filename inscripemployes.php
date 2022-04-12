<?php
session_start();
if (isset($_SESSION['id'])) {   
    header("location:affichage.php");
}
  include 'header.php'; ?>

   <div class=" container col-md-6 col-md-offset-3 ">
     <div class="panel panel-warning">
        <div class="panel panel-heading">
           <p align="center"> Inscription employer</p>
        </div>
        <div class="panel pane-body">
            <form action="addemployes.php" class="form" method="POST">
            <div class="form-group">
                <label for="nom" class=" label-control">Nom</label>
                <input type="text" class="form-control" name="nom" >           
            </div>
            <div class="form-group">
                <label for="prenom" class="label-control">Prenom</label>
                <input type="text" class="form-control" name="prenom" >           
            </div>
            <div class="form-group">
                <label for="age" class=" label-control">Age</label>
                <input type="number" class="form-control" name="age" >           
            </div>
            <div class="panel pane-body">
            <form action="adduser.php" class="form" method="POST">
            <div class="form-group">
                <label for="email" class="label-control">Email</label>
                <input type="email" class="form-control" name="email" >           
            </div>
            <div class="form-group">
                <label for="password" class="label-control">Password</label>
                <input type="password" class="form-control" name="mdp" >           
            </div>
            <div class="form-group">
                <label for="poste" class=" label-control">Poste</label>
                <!-- <input type="text" class="form-control" name="poste" > -->
                <select name="poste" id="" class="form-control">
                    <option value="0">selectionnez votre poste</option>
                    <?php 
                        $query = "SELECT * FROM poste";
                        $resultat = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($resultat)){
                            ?>
                            <option value="<?php echo $row['id_poste']; ?>">
                                <?php echo $row['libelle'];?>
                            </option>
                        <?php    
                           }
                        ?>
                    <option value=""></option>
                
                </select>
            </div>
            <div class="form-check">
                <input type="text" class="form-check-input" type="checkbox" value="1" ON>

        

            </div>
           
            
            
            
            
            <div class="form-group" align="center">
               <button class="btn btn-success" type="submit" name="ok">Valider</button>
               <button class="btn btn-danger" type="reset" name="reset">Annuler</button>
            
            </div>
            
            </form>
        </div>
        </div>
   </div>



<?php include 'footer.php'; ?>