<?php
    //include('C:/xampp/htdocs/E_Beauty/Model/User.php'); 
    include('C:/xampp/htdocs/E_Beauty/Controller/userC.php'); 

    $error = "";

    // create User
    $Client = null;

    // create an instance of the controller
    $ClientC = new UserC();
    if (
      isset($_POST["USER"]) &&
        isset($_POST["FirstName"]) &&
		isset($_POST["LastName"]) &&		
        isset($_POST["UserName"]) &&
		isset($_POST["Password"]) && 
        isset($_POST["Email"]) && 
        isset($_POST["Ville"])
    ) {
        if ( !empty($_POST["USER"]) &&
            !empty($_POST["FirstName"]) && 
			!empty($_POST['LastName']) &&
            !empty($_POST["UserName"]) && 
			!empty($_POST["Password"]) && 
            !empty($_POST["Email"]) && 
            !empty($_POST["Ville"])
        ) {
            $Client = new User(
                $_POST['FirstName'],
				$_POST['LastName'],
                $_POST['Password'], 
				$_POST['Email'],
                $_POST['UserName'],
                $_POST['Ville']
            );
            $ClientC->updateUserBDD($Client,$_POST['USER']);
            header('Location:form_modifier.php');
        }
        else
            $error = "Missing information";
    }

    
?>