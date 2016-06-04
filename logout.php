<?php
	session_start();
	
	spl_autoload_register(function ($class) {
		 require_once $class . '.php';
	});
	$db = new DB();
	$user = new User();
	 
?> 
	
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>  
</head>

<body>
		 
	<?php

		// remove all session variables
	session_unset(); 

	// destroy the session
	session_destroy(); 

	header('Location: index.php');
	?>  
 

</body>
</html>