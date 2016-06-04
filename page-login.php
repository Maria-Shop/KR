<?php
	session_start();
	
	spl_autoload_register(function ($class) {
		 require_once $class . '.php';
	});
	$db = new DB();
	$user = new User();
	 
	$loginError = 0; 
	$loginErrorMessage;
	//print_r($_SESSION);
?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>  
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body >

	<div id="wrapper">

	<fieldset class="menu">
		<ul id="drop-nav">
		<li ><a class="menu" href="index.php"> Home </a> </li>
		<li ><a class="menu" href="#"> A&M 101</a>
		<ul>
		<li><a class="menu" href="page-A&M101-Manga.php"> Manga</a></li>
		<li><a class="menu" href="page-A&M101-Anime.php"> Anime</a> </li>
		<li><a class="menu" href="page-A&M101-Genres.php"> Genres </a></li>
		</ul>
		</li>
		<li ><a class="menu" href="page-news.php"> News</a></li>
		<li><a class="menu" href="page-shop.php"> Shop </a></li> 
		</ul>
		</fieldset>

		<h1 class="bigger">Login</h1>
		<br><br><br><br>

	<fieldset>
		

		<?php
		if(isset($_POST["submit"]) ) 
		{
			// Define $username and $password 
			$username=$_POST['username']; 
			$password=$_POST['password'];
			$hash="SELECT password FROM Users WHERE user_name=:user_name ";
			$hashstmt = $db->getConn()->prepare($hash);
			$hashstmt->bindParam(':user_name', $_POST['username']);
			$hashstmt->execute();
			
			$hashstmt->setFetchMode(PDO::FETCH_BOTH);
			$hashresult = $hashstmt->fetch();
		
			
			//var_dump(password_verify($password, $hashresult["password"]));
			//die;
			

			if(password_verify($password, $hashresult["password"]))			
			
			{
			
				$sql="SELECT * FROM Users WHERE user_name=:user_name and password=:password";
							
				

				$stmt = $db->getConn()->prepare($sql);
				
				//$hash = password_hash($password, PASSWORD_DEFAULT);
				//echo $hash;
				
				$stmt->bindParam(':user_name', $username);
				$stmt->bindParam(':password', $hashresult["password"]);

				$stmt->execute();
				
				
				$result =  $stmt->fetch(PDO::FETCH_BOTH);
				//var_dump($result);
				//die;
				
				if ($result) 
				{
					$_SESSION["user_name"] = $_POST['user_name'];
							$_SESSION["logged_in"] = 1;
							$_SESSION["user_id"]=$result['user_id'];
							header("Location: index.php");
				} 
				
			}
			else 
				{
					$loginErrorMessage = "wrong username or password<br>"; 
							$loginError = 1;
				}
		
			
				
		}  
			
			else {}
			
			if(isset($_POST["signup"]))
			{
				header("Location: page-signup.php");
			}
		?>  

		<div class="container">
		  <div class="row">
				  <div class="col-md-3"></div>
				  <div class="col-md-6">
						<p></p>
						 <form  method="post">
						 <br>
							  <div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Username">
							  </div>
							  
							  <div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							  </div>	

							  <button type="submit" class="btn btn-default" name="submit">Login</button>
							  <button type="submit" class="btn btn-default" name="signup">Sign Up</button>
							 
						</form>
					
						<?php 
							if($loginError == 1) 
							{
								echo "<br><div class='alert alert-danger' role='alert'>".$loginErrorMessage."</div>";
							}
						?>
					</div>
					
				<div class="col-md-3"></div>
			</div>
		</div>
		
    <div>
	<br><br>
		</fieldset>
	</div>
	
</body>
</html>