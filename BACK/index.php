<?php include('Header.php') ?>



<div class="col-md-9">
			<div class="table-responsive">	
				<table class="table table-bordered">
					<thead class="alert-info">
						<tr>
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
						?>
					
						<tr>
							<td><?php echo $fetch['file_name']?></td>
							<td><?php echo $fetch['file_type']?></td>
							<td><?php echo $fetch['date_uploaded']?></td>
							<!-- <td><?php echo $fetch['location']?></td> -->
						</tr>
						<img src="<?php echo $fetch['location']?>" alt="">
						<video controls width="250">

							<source src="<?php echo $fetch['location']?>"
									type="video/mp4">

							Sorry, your browser doesn't support embedded videos.
							</video>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>	
		</div>