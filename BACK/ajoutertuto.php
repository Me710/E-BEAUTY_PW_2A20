<?php include('Header.php') ?>
	

<div class="col-md-6 well">
		<h3 class="text-primary">PHP - File Upload Usng PDO</h3>
		<hr style="border-top:1px dotted #ccc;">
		<div class="col-md-3">
			<form method="POST" enctype="multipart/form-data" action="upload.php">
				<div class="form-group">
					<label>Upload here</label>
					<input name="file" type="file"  required="required" class="form-control"/>
				</div>
				<center><button class="btn btn-primary" name="upload">Upload</button></center>
			</form>
		</div>
		
	</div>