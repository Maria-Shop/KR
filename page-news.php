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
<div id="contentbox">

<table>
<tr>
<td class="firsttd"> <img src="./Images/435692-scarlett-johansson-in-lucy.jpg"> </td>
<td class="secondtd"><b>SCARLETT JOHANSSON SIGNS ON FOR GHOST IN THE SHELL</b><br><br>There are sadly very few women in Hollywood today who are considered big enough names to open a movie, who have also proven they can
 cross genres from comedy to drama to action to sci-fi and so on. Right at the top of that list right now is Scarlett ...<button onclick="window.location='page-news-Scarlett.php';">Read more</button></td>
</tr>
</table>
<br>
<table>
<tr>
<td class="firsttd"> <img src="./Images/8a28ca1d1d765c8a902dbca3ecb750441420954237_large.jpg" align="middle" > </td>
<td class="secondtd"><b> "THE LAST -NARUTO THE MOVIE-" BECOMES THE TOP-GROSSING FILM IN THE FRANCHISE</b><br><br>The official Twitter account for the Naruto anime film has announced that, as of the end of the last year, 
 the 10th Naruto film The Last -Naruto The Movie- became the top-grossing feature film in the franchise...<button onclick="window.location='page-news-Naruto.php';">Read more</button></td>
</tr>
</table>
<br>
<table>
<tr>
<td class="firsttd"> <img src="./Images/5f89d1f63d92a19de84f0a123a46db7f1420940846_large.jpg" align="middle"> </td>
<td class="secondtd"><b>JAPANESE FANS NAME THE MOST INSPIRING SPORTS ANIME</b><br><br>As is often said, you don't need to be a sports fan to enjoy sports anime/manga. In fact, some of the most popular series have been about sports that 
haven't traditionally had a following in Japan. Like the golden Shonen Jump motto 'Friendship, Effort, Victory,' ...<button onclick="window.location='page-news-Sports anime.php';">Read more</button></td>
</tr>
</table>
<br>
<table>
<tr>
<td class="firsttd"> <img  src="./Images/06d7218272dd2da681f13b084566dc5d1421210551_large.jpg"> </td>
<td class="secondtd"><b>"PSYCHO-PASS"FILM COLLABORATES WITH 6 RAMEN SHOPS ACROSS JAPAN</b><br><br>Special ramen dishes created in collaboration with the currently-showing feature film PSYCHO-PASS are now offered at selected 
ramen shops in Tokyo, Osaka, Kyoto, and Hokkaido for a limited time of one ...<button onclick="window.location='page-news-Psycho-pass.php';">Read more</button></td>
</tr>
</table>
<br>
</div>
</fieldset>


</div>


</body>
</html>