<!DOCTYPE HTML>
<html>
        <head>
                <title> yum list installed </title>
				<link rel="stylesheet" href="css1.css" type="text/css">
        <head>

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
			
			  <h1>Create KVM Instance</h1><hr><br>
				
				<div style="text-align: center;">		             
				step1 > step2 > <b>step3.Finished</b><br><br>
				</div>
				
			<div id="center">
                
				<h1>		result 	</h1>
			</div>
                <hr>
				
                <h2>
                <?php
                $vmname=$_POST["vmname"];
                $vcpus=$_POST["vcpus"];
                $ram=$_POST["ram"];
                $network=$_POST["network"];

                //exec("/bin/bash /var/www/html/ins1.sh $vmname $vcpus $ram");
                echo "vmname : "."$vmname"."<br>";
                echo "vmcpus : "."$vcpus"."<br>";
                echo "vram : "."$ram"."<br>";
                echo "network : "."$network"."<br>";
				?>
				</h2>
				
				<h1> IN DB server </h1>
				
				<h2>
				<?php
				$conn = mysqli_connect('localhost','user1','user1','test');
				$sql = "SELECT * FROM vmtbl WHERE vmname = '$vmname'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result);
				echo '<h1>'.$row['hostname']." ".$row['vmname']." ".$row['vcpus']." ".$row['vram'].'</h1>';
				
                $a1="finished!!";
                ?>
                </h2>
                <hr>
				
                <h3><?=$a1?></h3>
			

</body>
</html>
