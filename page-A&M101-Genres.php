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
<div id="contentbox">
<h1 class="bigger"> Genres <img src="./Images/Kyuubi_Naruto__Chibi_Clone_82_by_Blind_Itachi.gif"></h1>
<p> <br><br><br><br>There are a lot genres in the Manga and Anime world. Here, we will explain some of the most popular ones, for those who still wonder what Shonen, Seinen, Josei, etc. mean. :) </p>
<br><br><br><br>
<p><b>Action</b> - Featuring fast paced action, i.e. fighting, violence, or some other form of aggressive activity. <br><br>
<b>Adventure</b> - Titles included in this genre usually revolve around a character going on a trip or exploring the world to find his/her luck.<br><br>
<b>Comedy</b> - A piece of work generally intended to amuse. Light, humorous, sometimes even ridiculous...ly funny. <br><br>
<b>Doujinshi</b> - Literally, doujin means "same person"and shi "magazine". It's fan-art inspired by published anime or manga by professional artists.<br><br>
<b>Drama</b> - If a manga/anime's labelled as drama, it's usually meant to bring strong emotions; response from its readers/viewers, i.e. tension and/or sadness.<br><br>
<b>Fantasy</b> - Fancy stuff, magical creatures, dream land... Anything but routine.<br><br>
<b>Gender Bender</b> - It's all about changing genders by dressing in the opposite sex, wearing make-ups, or even switching bodies in some cases.<br><br>
<b>Harem</b> - Usually in a harem, you can see one male character and many female characters who're apparently or less obviously attracted to him. At times the genders can be the other way around and is referred to as a "Reverse Harem".<br><br>
<b>Historical</b> - Historical works show you glimpses of our own history by leading you along the ancient lane.<br><br>
<b>Horror</b> - Horror manga/anime are not for the faint of heart. It's for those who enjoy fear and terror inspired by frightful scenes from the work.<br><br>
<b>Josei</b> - "Ladies' comics". Target women from 18 to 30. The male equivalent to josei is seinen. Most of the times, the story tend to be about everyday experiences of women living in Japan style tends to be more restrained, realistic version of shoujo manga.<br><br>
<b>Martial Arts</b> - Aikido, judo, tae kwon do, karate, kendo... One word in general to sum up its theme: arts of combat.<br><br>
<b>Mature</b> - Contains subject matter which may be too extreme for people under  the age of 17. Titles in this category may contain intense violence, blood and gore, sexual content and/or strong language.<br><br>
<b>Mecha</b> - The term itself refers to walking vehicles controlled by a pilot. Titles under this genre are usually with some fantastic or futuristic element and always have something to do with large robotic machines.<br><br>
<b>Mystery</b>  - An unsolved case, a mysterious event... Keep you guessing right to the end while catching all the clues and riddles along the way.<br><br>
<b>Psychological</b> - Usually deals with the philosophy or a state of mind, nine cases out of ten, the crazy kind. May contain some disturbing contents.<br><br>
<b>Romance</b> - L-O-V-E, love! Closely related to the shoujo genre.<br><br>
<b>School Life</b> - Set in campus or some sort of school.<br><br>
<b>Sci-fi</b> - Short for science fiction, series labelled as sci-fi often involved speculation based on current or future science or technology. There are no boundaries where imagination may carry you.<br><br>
<b>Seinen</b> - For young men 10 to 30 years old. Often involving male heroes, themes of honour, slapstick humour, and sometimes explicit sexuality, etc.<br><br>
<b>Shoujo</b> - Targeted for girls roughly between the ages of 10 and 18. Covers many subjects in a variety of styles, often closely tied to romance and love.<br><br>
<b>Shounen</b> - Also known as Shonen, it's primarily written for boys. Fighting and/or violence can often be seen in these works. Closely tied to genres like action, adventure and/or martual arts.<br><br>
<b>Slice of Life</b> - Usually portrays a "cut-out"sequence of events in a character's life. It usually tends to depict the everyday life of ordinary people, sometimes with fantasy or sci-fi elements involved.<br><br>
<b>Sports</b> - Centres around any kind of sports. Sports titles depict the stories of loss and gain in the world of a specific sport.<br><br>
<b>Supernatural</b> - Superman, UFOs... Deals with unexplained powers or things that do not happen in nature.<br><br>
<b>Tragedy</b> - Get yourself a handy or some tissue paper beforehand. That's all I've got to say.</p>
</div>
</fieldset>


</div>


</body>
</html>