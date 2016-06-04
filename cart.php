<?php
//cart php

session_start();


spl_autoload_register(function ($class) {
		 require_once $class . '.php';
	});
	
	$db = new DB();

?>

<!DOCTYPE html>
<html>
<head>
<title> OtakuWorld </title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
	
    $("a.removeItemFromCart").click(function(event) {
		
		if (!confirm("Are you sure that you want to delete this item?"))
		{
			
			event.preventDefault;
			return false;
		} 
		
	});
});
</script>
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
		echo '</p> <ul class="abc"><li><a class="cba" href="logout.php">Logout</a></li></ul>';
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
if(isset($_SESSION['logged_in'])) 
{
	$userId = $_SESSION['user_id'];
	$cartItemsStmt = $db->getConn()->prepare("SELECT * FROM cart c INNER JOIN products p ON c.product_id = p.product_id WHERE c.user_id = :user_id");
	$cartItemsStmt->bindParam(':user_id', $userId);
	$cartItemsStmt->execute();
	$cartItemsStmt->setFetchMode(PDO::FETCH_ASSOC);
	$cartItemsResult = $cartItemsStmt->fetchAll();
	
	//print '<pre>';
	//var_dump($cartItemsResult);
	
	//show message
	
	if (isset($_SESSION['message']))
	{
		print '<p>'.$_SESSION['message'].'</p>';
		unset($_SESSION['message']);
	}
	
	
	if (!empty($cartItemsResult)) {
		
		$totalSum = 0;
		
		print '<p>You have ' . count($cartItemsResult) . ' items</p>';
		print "<table class ='bored' >"; 
		print "<tr>".
				"<td class='b'></td>".
				"<td class='b'>Product Name</td>".			
				"<td class='b'>Item Price</td>".
				"<td class='b'></td>".
				"</tr><tr><td class='b'><br></td></tr>";
		
		foreach($cartItemsResult as $k) {	
		
		
		print "<tr>".
				"<td class='b'> <img class='small' src='".$k['product_image']."'> </td>".
				
				"<td class='b'>" . $k['product_name'] . "</td>".
				"<td class='b'>$" . $k['item_price'] . "</td>".
				"<td class='b'>" . 
				"<a href='remove-from-cart.php?cart=".$k['cart_id']."' class='removeItemFromCart'>Remove</a>" .
				"</td>".
				"</tr>".
				"</tr><tr><td class='b'><br></td></tr>";
				
		$totalSum += $k['item_price']; 
		}
		
		print "</table>";
		print '<p>Total Sum: $'. $totalSum. ' </p>';
	} 
	

		
}  else {
	header("Location: page-login.php");
}	


?>
<br>
</div>
</fieldset>


</div>


</body>
</html>