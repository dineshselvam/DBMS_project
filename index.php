<?php
	$connection = mysql_connect("localhost", "root", "");
	if(!$connection)
	{
		die('Connection is not established'.mysql_error());
	}
	mysql_select_db("researchscholar", $connection);
?>