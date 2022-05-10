<?php include('Header.php') ?>
<?php include('conn.php') ?>
<?php include('upload.php') ?>


<div class="col-md-9">
			<div class="table-responsive">	
				<table class="table table-bordered">
					<thead class="alert-info">
						<tr>
							<th>Video </th>
							<th>File Name</th>
							<th>File Type</th>
							<th>Date Uploaded</th>

						<!--	<th>File Path</th>-->
						</tr>
					</thead>
					<tbody>
						<?php
							require_once 'conn.php';
			
							$sql = "SELECT * FROM `file`";
							$query = $conn->prepare($sql);
							$query->execute();
							
							while($fetch = $query->fetch()){

							$id=$fetch['file_id'];

						?>
					
						<tr>


							<td>
							 <!-- <img src="<?php echo $fetch['location']?>" alt=""> -->
						<video controls width="250">

							<source src="<?php echo $fetch['location']?>"
									type="video/mp4">

							Sorry, your browser doesn't support embedded videos.
							</video>	

							</td>



							<td><?php echo $fetch['file_name']?></td>
							<td><?php echo $fetch['file_type']?></td>
							<td><?php echo $fetch['date_uploaded']?></td>
							<!-- <td><?php echo $fetch['location']?></td> -->

							<div>
								
							<td>
							<!--	<form method="POST" enctype="multipart/form-data" action="deletetuto.php">	 
									 <button    class="btn btn-primary" name="delete">suppimer</button> 
								</form>	-->
								<a href="deletetuto.php?file_id=<?php echo $id; ?>" class="btn btn-danger">Supprimer</a>
                            </td>

				


							</div>
						</tr>



						
						<?php
							}
						?>
					</tbody>
				</table>

				
			</div>	
		</div>