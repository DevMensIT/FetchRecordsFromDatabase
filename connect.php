<?php

	$username="root";
	$password="";
	$servername="localhost";
	$database="demo";

	$con = mysql_connect($servername,$username,$password);
	if(!$con)
	{
		die("Error while connecting to the server");
	}

	$db_connect = mysql_select_db($database);
	if(!$db_connect)
	{
		die("Error while connecting to the database");
	}
?>