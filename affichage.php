<?php include 'header.php' ?>



<div class="panel panel-info">
	<div class="panel-heading">
		<h1 align="center">Ensemble des employes</h1>
	</div class="panel panel-body">
	<table class="table table-bordered table-striped">
		<thead>
			<th>N°</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Age</th>
			<th>Poste</th>
			<th>User</th>
            <th>supprimer</th>
            <th>edit</th>
            <th>ajout</th>
		</thead>
		<tbody>
			<?php
				$requete = "SELECT * FROM emp";
				$result = mysqli_query($conn,$requete);
				$no=1;
				if ($result) {
					while($row = mysqli_fetch_assoc($result))
					{
                        $id = $row['id_poste'];
                        $req1 = "SELECT * FROM poste WHERE id_poste ='$id'";
                        $resulta1 = mysqli_query($conn,$req1);
						
						?>
						<tr>
							<td><?php echo $no++;?></td>
							<td><?php echo $row['nom'];?></td>
							<td><?php echo $row['prenom'];?></td>
							<td><?php echo $row['age'];?></td>
							<td>
								<?php
                            	if($row1 =  mysqli_fetch_assoc($resulta1)){
									
                                echo $row1['libelle'];
                            ?></td>
                            <td><?php


                            if(isset($row1['id_user'])){


                                $id2 = $row1['id_user'];
                                $req2 = "SELECT * FROM user WHERE id_user ='$id2'";
                                $resulta2 = mysqli_query($conn,$req2);

                                if($row2 =  mysqli_fetch_assoc($resulta2)){
                                    echo $row2['email'];}
                                
                            }
                        }
						
					
                            ?></td>

                            <td>
                                <a href="delete.php?mamo=<?php echo $row['id_emp']; ?>">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-trash"></span>  
                                    </button>
                                </a>
                               
                            </td>
                            <td>
                                 <a href="edit.php?id=<?php echo $row['id_emp']; ?>">
                                    <button class="btn btn-warning" type="button">
                                        <span class=" glyphicon glyphicon-pencil"></span>  
                                    </button>
                                </a>
                               
                            </td>
                            <td>
                                 <a href="ajout.php?id=<?php echo $row['id_emp']; ?>">
                                    <button class="btn btn-warning" type="button">
                                        <span class=" glyphicon glyphicon-pencil"></span>  
                                    </button>
                                </a>
                               
                            </td>
						</tr>
								
			
				<?php	

					}
				}
			
		
			
			?>
			
		</tbody>
	</table>


</div>




<?php include 'footer.php';?>