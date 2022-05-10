<p>Bonjour</p>

<?php
   
   $conn = new PDO('mysql:host=localhost;dbname=db_upload_pdo', 'root', '');
	
	echo "<p>Bonjour</p>";

   $get_id=$_GET['file_id'];
   
   // sql to delete a record
   $sql ="Delete from file where file_id='$get_id'";
    // use exec() because no results are returned
   $conn->exec($sql);


   header('location:http://localhost/php/BACK/index.php');
   ?>
