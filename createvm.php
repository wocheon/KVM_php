<!DOCTYPE html>
<html>
        <head>
                <title>가상머신 생성 페이지</title>
				<link rel="stylesheet" href="css1.css" type="text/css">
        </head>

		
        <body>
	<div id="main">
			MANAGEMENT PAGE
			</div>
			
			<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="instance.html">CreateVM</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="#about">About</a></li>
			</ul>


		<html>
        <head>
                <title>가상머신 생성 페이지</title>
        </head>
    <body>
<div id="center">
<br><br>
<?php
$vmname=$_POST["vmname"];
$vcpus=$_POST["vcpus"];
$ram=$_POST["ram"];
$network=$_POST["network"];
echo "vmname : "."$vmname"."<br>"."<br>";
echo "vmcpus : "."$vcpus"."<br>"."<br>";
echo "vram : "."$ram"."<br>"."<br>";
echo "network : "."$network"."<br>"."<br>";
?>


<form action="result.php" method="post">
<input type=hidden name=vmname value=<?=$vmname?>>
<input type=hidden name=vcpus value=<?=$vcpus?>>
<input type=hidden name=ram value=<?=$ram?>>
<input type=hidden name=network value=<?=$network?>>
<input type="submit" value="install">
</form>

<form action="index1.html" method="post">
<input type="submit" value="cancel">
</form>

</body>
</html>
        </body>
</html>