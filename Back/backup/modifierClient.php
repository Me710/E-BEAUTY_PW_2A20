<?php
    //include('C:/xampp/htdocs/E_Beauty/Model/User.php'); 
    require_once('../Controller/serviceC.php'); 

    $error = "";

    // create User
    $service = null;

    // create an instance of the controller
    $serviceC = new ServiceC();
    if (
      isset($_POST["USER"]) &&
        isset($_POST["FirstName"]) &&
		isset($_POST["LastName"]) &&		
    ) {
        if ( !empty($_POST["USER"]) &&
            !empty($_POST["FirstName"]) && 
			!empty($_POST['LastName'])
        ) {
            $Client = new User(
                $_POST['FirstName'],
				$_POST['LastName'],
                $_POST['Password']
            );
            $ClientC->updateUserBDD($Client,$_POST['USER']);
            header('Location:form_modifier.php');
        }
        else
            $error = "Missing information";
    }

    
?>