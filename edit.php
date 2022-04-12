<?php 
   include 'header.php';

   $id=$_GET['id'];
   if (isset($id)) {
   	$resultat=$conn->query("SELECT * FROM emp WHERE id_emp='$id' limit 0,1");
   	$row = $resultat->fetch_assoc();
 ?>

  <div class=" container col-md-6 col-md-offset-3 ">
     <div class="panel panel-warning">
        <div class="panel panel-heading">
           <p align="center"> Mise a jour Employer</p>
        </div>
        <div class="panel pane-body">
            <form action="modif.php?id=<?php echo($row['id_emp']);?>" class="form" method="POST">
            <div class="form-group">
                <label for="nom" class=" label-control">Nom</label>
                <input type="text" class="form-control" name="nom" value="<?php echo($row['nom']); ?>">           
            </div>
            <div class="form-group">
                <label for="prenom" class="label-control">Prenom</label>
                <input type="text" class="form-control" name="prenom" value="<?php echo($row['prenom']); ?>">           
            </div>
            <div class="form-group">
                <label for="age" class=" label-control">Age</label>
                <input type="number" class="form-control" name="age" value="<?php echo($row['age']); ?>" >           
            </div>
            <div class="form-group">
                <label for="poste" class=" label-control">Poste</label>
                <!-- <input type="text" class="form-control" name="poste" > -->
                <select name="poste" id="" class="form-control" disabled="disabled">
                	<?php
                	        $poste = $row['poste_id'];
                			$query = "SELECT * FROM poste WHERE id_poste='$poste'";
                        	$resultat = mysqli_query($conn,$query);
                        	if ($row1 = mysqli_fetch_assoc($resultat)) {
                        		
                       	 ?>
                            <option value="<?php echo $row1['id_poste']; ?>">
                                <?php echo $row1['libelle'];?>
                            </option>
                            <?php    
                           }
                        ?>
                </select>
            </div>
            <div class="form-group">
                <label for="poste" class=" label-control">User</label>
                <!-- <input type="text" class="form-control" name="poste" > -->
                <select name="user" id="" class="form-control" disabled="disabled">
                	<?php
                	        $poste = $row['id_user'];
                			$query = "SELECT * FROM user WHERE id_user='$poste'";
                        	$resultat = mysqli_query($conn,$query);
                        	if ($row1 = mysqli_fetch_assoc($resultat)) {
                        		
                       	 ?>
                            <option value="<?php echo $row1['id_user']; ?>">
                                <?php echo $row1['email'];?>
                            </option>
                            <?php    
                           }
                        ?>
                </select>
            </div>
            
            <div class="form-group" align="center">
               <button class="btn btn-success" type="submit" name="ok">Valider</button>
               <button class="btn btn-danger" type="reset" name="reset">Annuler</button>
            
            </div>
            
            </form>
        </div>
        </div>
   </div>
   	

   	<?php } ?>

  
 