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
<h1>		
<?php
$con = mysqli_connect("localhost", "user1", "user1","test") or die ("Mysql connection fail !!!");
echo ("MYSQL CON success!!")."<br>";

$sql = "SELECT * FROM vmtbl";
$ret = mysqli_query($con, $sql);

if ($ret) {
	echo mysqli_num_rows($ret), "rows serch"."<br>"."<br>";
}

else {
	echo "데이터 조회실패!!"."<br>";
	exit();
}
	echo "Hostname  vmname  vcpus  vram "."<br>";
while($row = mysqli_fetch_array($ret)) {
	echo $row['hostname'], "  " , $row['vmname'], "  ", $row['vcpus'], "  ",$row['vram'], " ", "<br>";
}


mysqli_close($con);
?>
</h1>
	</body>
</html>
