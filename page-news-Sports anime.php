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
<img src="./Images/kiseki_no_sedai_by_nakamurakenji1993-d6eizul.jpg">
<div id="contentbox">
<h1>Japanese Fans Name the Most Inspiring Sports Anime</h1>
<h4>BY SCOTT GREEN </h4>
<br>
<p>TAs is often said, you don't need to be a sports fan to enjoy sports anime/manga. In fact, some of the most popular series have been about sports that haven't traditionally had a following in Japan. 
Like the golden Shonen Jump motto 'Friendship, Effort, Victory,' it's the involving journey of the characters striving to compete that hook fans. In a new Charapedia 10,000 reader poll, Japanese fans were asked to name the most inspiring. </p>

<p>The male-female ratio of responses was 46.6% to 53.4%. 75.6% of the responses were from fans in their teens and 20's. Of the 84 works suggested, the top 20 pics were:</p>
<ol reversed>
<li>Aim for the Ace! (tennis)</li>
<li>Giant Killing (football)</li>
<li>Kenkou Zenrakei Suieibu Umishou (swimming)</li>
<li>Baby Steps (tennis)</li>
<li>Hajime no Ippo (boxing)</li>
<li>Touch (baseball)</li>
<li>H2 (baseball)</li>
<li>Ro-Kyu-Bu! (basketball)</li>
<li>Big Windup! (baseball)</li>
<li>Eyeshield 21 (American Football)</li>
<li>Inazuma Eleven (Football)</li>
<img src="./Images/377e3088836dd243af5a892ab51cfce21420939996_full.jpg">
<li>Ace of the Diamond (Baseball)</li>
<img src="./Images/cb5aaa96e2dd4bb2f9d25a788832a3651420939913_full.jpg">
<li>Yowamushi Pedal (Cycling)</li>
<img src="./Images/b4e7df170b57de46765b8ab506584e921420939815_full.png">
<li>Captain Tsubasa (Football)</li>
<img src="./Images/f7058e45402c542a6b56e632a6478b3c1420939712_full.jpg">
<li>Free! (Swimming)</li>
<img src="./Images/2572455108c9ec28197abc022c2d67aa1420939473_full.jpg">
<li>Major (Baseball)</li>
<img src="./Images/0f68332e2ab1c33568a1aad448fcb91b1420939352_full.jpg">
<li>The Prince of Tennis (Tennis)</li>
<img src="./Images/eb87bc62bb3654e816ec5b5677ca51bd1420939244_full.jpg">
<li>Haikyuu! (Volleyball)</li>
<img src="./Images/d144527b768e99094dd734d2f1a237a21420939122_full.jpg">
<li>Slam Dunk (Basketball)</li>
<img src="./Images/641126fd9fc606f28ada1e117ccb55631420939010_full.jpg">
<li>Kuroko’s Basketball (Basketball)</li>
<img src="./Images/2f3279dd5bca9c769b654a11fcd7d4601420938844_full.png">
</div>
</fieldset>


</div>


</body>
</html>