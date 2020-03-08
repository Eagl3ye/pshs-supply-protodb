<?php
	if(isset($_POST['gateway_register'])) 
	{
		$conn = pg_connect(getenv("DATABASE_URL"));
		$query = "CREATE TABLE IF NOT EXISTS items (item varchar(255))";
		pg_query($conn, $query); 
		$query = "INSERT INTO items VALUES ('$_POST[email]')";
		echo "<script>alert('Success')</script>";
		pg_query($conn, $query); 
	}
?>