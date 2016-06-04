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
<img src="./Images/tumblr_nd8wb4AR6Q1rkalabo1_1280.jpg">
<div id="contentbox">
<h1>"The Last -Naruto The Movie-" Becomes the Top-Grossing Film in the Franchise</h1>
<h4>BY MIKIKAZU KOMATSU </h4>
<br>
<p>The official Twitter account for the Naruto anime film has announced that, as of the end of the last year,  the 10th Naruto film The Last -Naruto The Movie- became the top-grossing feature film in the franchise.</p>
<img src="./Images/1415162600955.jpg">
<p>The highly anticipated film was released on 266 screens across Japan on December 6, easily topping the weekend box office with an impressive 515,331,800 yen on 396,280 admissions. By the end of December 2014, 
it had earned about 1.75 billion yen (14.76 million US dollars), surpassing the previous record of 1.48 billion yen by ROAD TO NINJA in 2012. It has made more money than Christopher Nolan's Interstellar (1.2 billion) 
and David Fincher's Gone Girl (900 million).</p>
<p>Even after a month since its release, the film still ranked 7th in the recent weekend box office of January 3-4. It is expected to earn around two billion yen in its entire run.</p>
<p><iframe src="http://www.youtube.com/embed/pK-vsib2YMY" frameborder="0" width="560" height="315"></iframe></p>

</div>
</fieldset>


</div>


</body>
</html>