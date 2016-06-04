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
<?php



	//show message
	
	if (isset($_SESSION['message']))
	{
		print '<p>'.$_SESSION['message'].'</p>';
		unset($_SESSION['message']);
	}

	$productsStmt = $db->getConn()->prepare("SELECT * FROM products");
	$productsStmt->execute();
	//$result = $productsStmt->setFetchMode(PDO::FETCH_ASSOC);
	$result  = $productsStmt->fetchAll();
	foreach($result as $k) {	
		echo 
	"<table>
	<tr>
	<td class='firsttd'> <img src='".$k['product_image']."'> </td>
	<td class='secondtd'><b>".$k['product_name']."</b><br>Price: $".$k['product_price']."<a class='butsht' href='add-to-cart.php?product=".$k['product_id']."'>Add to cart</a><br><br>".$k['product_info']."</td>
	</tr>
	</table>
	<br>";}
	
?>
<br>
</div>
</fieldset>


</div>


</body>
</html>