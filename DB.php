<?php
	class DB
	{
		private $conn;

		function DB()
		{
			try
			{
				$this->conn  = new PDO ('mysql:host=localhost; dbname=Shop', 'root','');
				//echo "Connection ok ";
			}

			catch(PDOException $e)
			{
				echo "Connection failed".$e->getMessage();
			}
		}
		
	function getConn()
		{
			return $this->conn;
		}

	}
?>
