<?php
//remove from cart
session_start();


spl_autoload_register(function ($class) {
		 require_once $class . '.php';
	});
$db = new DB();

//add to cart
if(isset($_SESSION['logged_in'])) 
{
	if (isset($_GET['cart']))
	{
		$cartId = intval($_GET['cart']);
		$userId = intval($_SESSION['user_id']);
		
		
		if (!empty($cartId))
		{
			$cartStmt = $db->getConn()->prepare("DELETE FROM cart WHERE cart_id = :cart_id AND user_id = :user_id");
			$cartStmt->bindParam(':cart_id', $cartId);
			$cartStmt->bindParam(':user_id', $userId);
			$cartStmt->execute();
			$_SESSION['message'] = "Item has been removed from cart!";
			header("Location: cart.php");
			
			
		}
	}		
}  
else 
{
	header("Location: page-login.php");
}