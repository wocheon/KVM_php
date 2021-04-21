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
			<li><a href="mysqlcon.php">DB</a></li>
			</ul>


		                <h1>Create KVM Instance</h1><hr><br>
				
				<div style="text-align: center;">		             
				step1 > <b>step2.Check Your Select</b> > step3<br><br>
				</div>
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
</div>

<div id="center">
<form action="result.php" method="post" >
<input type=hidden name=vmname value=<?=$vmname?>>
<input type=hidden name=vcpus value=<?=$vcpus?>>
<input type=hidden name=ram value=<?=$ram?>>
<input type=hidden name=network value=<?=$network?>>
<input type="submit" value="install" >
</form>

<form action="index1.html" method="post">
<input type="submit" value="cancel">
</form>
</div>

</body>
</html>
