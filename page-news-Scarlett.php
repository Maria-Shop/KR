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
<img src="./Images/Ghost.jpg">
<div id="contentbox">
<h1>Scarlett Johansson signs on for Ghost in the Shell</h1>
<h4>BY KYLE ANDERSON </h4>
<br>
<p>There are sadly very few women in Hollywood today who are considered big enough names to open a movie, who have also proven they can cross genres from comedy to drama to action to sci-fi and so on. 
Right at the top of that list right now, and quite deservedly if we do say so ourselves, is Scarlett Johansson, who has been a standout performer (though still without a solo bolo) in the Marvel Cinematic Universe and 
last year made a huge splash in Luc Besson’s crazy mind-expanding action flick Lucy. Now, the versatile actress has signed on as another badass character in DreamWorks’ live action spin on the classic anime film Ghost in the Shell.</p>
<img src="./Images/scarlett-johansson-ghost-shell.jpg">
<p>Based on Masamune Shirow’s manga of the same name, the 1995 anime directed by Mamoru Oshii follows a cybernetically-augmented human, Major Motoko Kusanagi, who is the leader of Public Security Section 9. 
She and her team try to track down an infamous and dangerous hacker called the Puppet Master, which leads down a road of conspiracy, government cover-up, and of course, murder. The film was a cyber-punk staple, in the same vein as Akira, 
and dealt with the growing philosophical implications of giving our bodies over more and more to machines and technology. All themes that are even truer now than they were in 1995.</p>
<p>Johansson is an excellent choice to play the film’s heroine, given her ability to be strong, smart, and vulnerable in equal measure. DreamWorks’ co-founder Steven Spielberg has apparently
 been wanting to get a Ghost in the Shell movie off the ground for a long time, so having an actress as powerful a box office draw as Johansson signed on is a huge boon.</p>
 <img src="./Images/ghostintheshell-scarletjohansson.jpg">
</div>
</fieldset>


</div>


</body>
</html>