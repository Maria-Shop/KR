<?php
//nin
session_start();


spl_autoload_register(function ($class) {
		 require_once $class . '.php';
	});
$db = new DB();

//add to cart
if(isset($_SESSION['logged_in'])) 
{
	if (isset($_GET['product']))
	{
		$productId = intval($_GET['product']);
		$userId = intval($_SESSION['user_id']);
		
		if (!empty($productId))
		{
			$productsStmt = $db->getConn()->prepare("SELECT * FROM products WHERE product_id = :product_id");
			$productsStmt->bindParam(':product_id', $productId);
			$productsStmt->execute();
			$productsStmt->setFetchMode(PDO::FETCH_ASSOC);
			$productResult = $productsStmt->fetch();
			
			if (!empty($productResult))
			{
				if (isset($productResult['product_price'])) 
				{
					$productPrice = $productResult['product_price'];
					
					$sql = "INSERT INTO Cart (product_id,item_price,user_id) 
				VALUES (:product_id,:item_price,:user_id);";
					$stmt = $db->getConn()->prepare($sql);
					
					$stmt->bindParam(':product_id', $productId);
					$stmt->bindParam(':item_price', $productPrice);
					$stmt->bindParam(':user_id', $userId);
					$stmt->execute();
					
					if($stmt)
					{
						$_SESSION['message'] = "Item has been added to cart";
						header("Location: page-shop.php");
						
					}
					
				}
					
			}
			print '<pre>';
			var_dump($productResult);die;
		}
		
		
	
	}		
}  else {
	header("Location: page-login.php");
}