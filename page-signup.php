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
<title> OtakuWorld </title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>


<?php
 
 


	If(isset($_POST["submit"]))
		If($_POST['first_name']=='' ||$_POST['last_name']=='' || $_POST['email']=='' || $_POST['user_name']==''|| $_POST['password']=='')
		{
			$suErrorMessage = "Please fill the empty field.";
			//echo "please fill blank";
			$loginError = 1;
		}
		Else
		{
			try{
						
			$sql = "INSERT INTO Users (first_name,last_name,email,user_name,password) 
				VALUES (:first_name,:last_name,:email,:user_name,:password);";
			$stmt = $db->getConn()->prepare($sql);
			
			
			
			$stmt->bindParam(':first_name', $_POST['first_name']);
			$stmt->bindParam(':last_name', $_POST['last_name']);
			$stmt->bindParam(':email', $_POST['email']);
			$stmt->bindParam(':user_name', $_POST['user_name']);
			$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_DEFAULT));
			$stmt->execute();
			If($stmt)
			{
				$suMessage = "Sign up successful";
				$loginError = 3;
				
				
			}
			Else
			{
				$suErrorMessage = "Please try again";
				$loginError = 2;
				
			}
			
			
		}catch(PDOException $e)
		{
			echo "insertion problem: " . $e->getMessage();
		}
		//echo $user -> registeras ($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['user_name'], $_POST['password'], $db);
		//echo $user -> registeras ();
		//echo $user -> checkUser("ivan","123");
	}

?>  
 
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

<h1 class="bigger">Signup</h1>
	<br><br><br><br>

<fieldset>
<br><br>
<div class="container">
  <div class="row">
		  <div class="col-md-3"></div>
		  <div class="col-md-6">
				<p></p>
				 <form  method="post">
				 <div class="form-group">
						<label for="username">First Name</label>
						<input type="text" class="form-control" id="firstname" name="first_name" placeholder="Firstname">
					  </div>
					  <div class="form-group">
						<label for="username">Last Name</label>
						<input type="text" class="form-control" id="lastname" name="last_name" placeholder="Lastname">
					  </div>
					<div class="form-group">
						<label for="username">E-mail Address</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Email">
					  </div>
					  <div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="user_name" placeholder="Username">
					  </div>
					  <div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					  </div>			  			 
					  <button type="submit" class="btn btn-default" name="submit">Sign up</button>
			</form>
			
			<?php 
				if($loginError == 1) {
				echo "<br><div class='alert alert-danger' role='alert'>".$suErrorMessage."</div>";
				}
				else 
					if($loginError == 2) {
				echo "<br><div class='alert alert-danger' role='alert'>".$suErrorMessage."</div>";
				}
					else
						if($loginError == 3)
					{
						echo "<br><div class='alert alert-danger' role='alert'>".$suMessage."</div>";
						header('Refresh: 3;url=page-login.php');
						echo "<font color='white'>You'll be redirected to the login page in 3 seconds.</font>";
						echo "<font color='white'>If not, click <a class='cba' href='page-login.php'>here.</a></font>";
					}
			?>
			
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<br><br>
</fieldset>


</div>


</body>
</html>