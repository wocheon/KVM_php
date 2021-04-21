<!DOCTYPE html>
<html>
	<head>
	<title> 갤러리 </title>
	<link rel="stylesheet" href="css1.css" type="text/css">
	<style>
	img {
		witdh: 250px;
		height: 154px;
		float : left;
		margin : 5px;
		}
	</style>
	</head>

	<body>
	    <div id="main">
		MANAGEMENT PAGE
		</div>
		
	<?php
	$db_host="localhost";
	$db_user="root";
	$db_password="1234";
	$db_name="";
	$con=mysql_connect($db_host,$db_user,$db_password,$db_name);
	
	if( mysql_connect_error($con) ) {
		echo "MySQL 접속 실패 !!", "<br>";
		echo "오류 원인 : ", mysql_connect_error();
		exit();
		}
	
	echo "MYSQL 접속 성공";
	mysql_close($con);
?>
	
		
	</body>
</html>





		
		
    