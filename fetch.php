<?php
	if(isset($_POST['gateway_login'])) 
	{
		$conn = pg_connect(getenv("DATABASE_URL"));
		$query = "SELECT * FROM items"; 

		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		echo string(pg_fetch_row($rs)[0]);
	}
?>
