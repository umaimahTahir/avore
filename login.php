<?php
include 'core/init.php';

if (empty($_POST) === false) {
   $username = $_POST['username'];
   $password = $_POST['password'];

	if (empty($username) === true || empty($password) === true) {
                $errors[] = 'you need to enter username and password';
	}   
   else if (user_exists($username) === false) {
		$errors[] = 'we can\'t find that username';
	}
   else if (user_active($username) === false ) {
                $errors[] = 'You haven\'t activated your account!';
        }
 
   else {
        $login = login($username, $password);
        echo $username;
	if ($login === false) {
		$errors[] = 'That username or password is incorrect';
	} 
	
	else {
        
		echo 'okay!';
           // set the user session
        $_SESSION["loggedin"]=true;   
        header('Location: index.php');
        // redirect user to home
 	}
        	  

} 
	
    print_r($errors);
	
}




?>