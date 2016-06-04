<?php
	session_start();
	
	spl_autoload_register(function ($class) 
	{
		 require_once $class . '.php';
	});
	$db = new DB();
	$user = new User();
	 
	if(isset($_SESSION['logged_in'])) 
	{
		//echo "user logged in";		
	} 
?>

<!DOCTYPE html>
<html>
<head>
<title> OtakuWorld </title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>
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
<?php
if(isset($_SESSION['logged_in'])) 
	{
		//echo "user logged in";		
		echo '</p> <ul class="abc"><li><a class="cba" href="cart.php">&nbsp Cart</a></li><li>/</li><li><a class="cba" href="logout.php">Logout &nbsp</a></li>
		</ul>';
	} 
	else
		echo '

<br>
<ul class="abc"><li><a class="cba" href="page-signup.php" >Sign up </a></li><li>/</li><li><a class="cba" href="page-login.php" >Login</a></li></ul>'
?>
<div id="blspace"></div>

<fieldset>
<br>
<img src="./Images/psycho-pass-movie.jpg">
<div id="contentbox">
<h1>"PSYCHO-PASS" Film Collaborates with 6 Ramen Shops across Japan</h1>
<h4>BY MIKIKAZU KOMATSU </h4>
<br>
<p>Special ramen dishes created in collaboration with the currently-showing feature film PSYCHO-PASS are now offered at selected ramen shops in Tokyo, Osaka, Kyoto, and Hokkaido for a limited time of one month till February 9. 
The collaboration project is produced by online Ramen/Tsukemen store Takumen.com. In commemoration of the release of the film, the ramens are produced in the motif of the main characters of the series, and customers who purchase 
the collaboration ramen will also get a free collaboration post card featuring the character the ramen is inspired by. </p>
<br><br>
<p>"Paralyzer Miso Mala Men" (Akane Tsunemori) 1,000 yen
<img src="./Images/34f00dec791a545ab317e27da2ad11461421211324_full.jpg"></p>
<p>"Sunda Tomato Tsukemen"  (MikaShimotsuki) 1,000 yen
<img src="./Images/b06520beb867a9e42f778944966d632d1421211518_full.jpg"></p>
<p>"Shikisou Gradation type Miso" (Shinya Kogami) 850 yen
<img src="./Images/c9f2f2ab7211ffed8f442a2eee877d6a1421211564_full.jpg"></p>
<p>"Kyukyoku no Taiwan Maze Soba -Cho Kakusei ver.-" (Nobuchika Ginoza) 930 yen
<img src="./Images/981ef2016a90fbc035a9088e9637ff091421211636_full.jpg"></p>
<p>"Akane-chan Ebi Ramen"  (Sho Hinakawa) 780 yen
<img src="./Images/33463dbf8923d621810b17444bb609bb1421211757_full.jpg"></p>
<p>"Bound 2" (Yayoi Kunizuka) 880 yen
<img src="./Images/57bbeed3169ae104f8b71313a0a858ed1421211825_full.jpg"></p>

</div>
</fieldset>


</div>


</body>
</html>