<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
session_start();

		//var $db;
		//var $db_tableName;
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "macma";

		$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
		mysql_select_db($dbname) or die('database selection problem'); 
?>
