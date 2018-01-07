<?php
  // The global $_POST variable allows you to access the data sent with the POST method
  // To access the data sent with the GET method, you can use $_GET
  $user = htmlspecialchars($_POST['username']);
  $pass  = htmlspecialchars($_POST['password']);
	
	if($user == "tomsmith") && ($pass == "SuperSecretPassword!") {
		echo "You logged into a secure area";
	}
	
?>