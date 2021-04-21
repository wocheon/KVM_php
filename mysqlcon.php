<!DOCTYPE html>
<html>
	<head>
	<title> mysqlcontest </title>
	<link rel="stylesheet" href="css1.css" type="text/css">
	</head>

	<body>
	    <div id="main">
		MANAGEMENT PAGE
		</div>
		
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="instance.html">CreateVM</a></li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="mysqlcon.php">DB</a></li>
			</ul>
		
	<?php
	$db_host="localhost";
	$db_user="root";
	$db_password="1234";
	$db_name="";
	$con=mysql_connect($db_host,$db_user,$db_password,$db_name);
	
	if( mysql_connect_error($con) ) {
		echo "MySQL con FAIL !!", "<br>";
		echo "ERROR : ", mysql_connect_error();
		exit();
		}
	
	echo "MYSQL con success!!";
	mysql_close($con);
?>
	
		
	</body>
</html>





		
		
    
