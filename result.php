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
			<li><a href="#contact">Contact</a></li>
			<li><a href="#about">About</a></li>
			</ul>
			
			<div id="center">
                <h1> system (sh) test </h1>

                <h3> result </h3>
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
                $a1="finished!!";
                ?>
                </h2>
                <hr>
				
                <h3><?=$a1?></h3>
			

</body>
</html>