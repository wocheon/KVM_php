<!DOCTYPE HTML>
<html>
        <head>
                <title> yum list installed </title>
				<link rel="stylesheet" href="css1.css" type="text/css">
        <head>

    <body>
	<div id="main">
	MANAGEMENT PAGE<br>
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
            <h1>result</h1>
			</div>
                <hr>
				
                <h2>
                <?php
                $vmname=$_POST["vmname"];
                $vcpus=$_POST["vcpus"];
                $ram=$_POST["ram"];
                $network=$_POST["network"];

                exec("/bin/bash /var/www/html/ins1.sh $vmname $vcpus $ram");
                echo "vmname : "."$vmname"."<br>";
                echo "vmcpus : "."$vcpus"."<br>";
                echo "vram : "."$ram"."<br>";
                echo "network : "."$network"."<br>";
				?>
				</h2>
				
				<div id="center">
				<h1> on DB table </h1>
				</div>
				
				<h2>
		<?PHP

                $vmname1=$_POST["vmname"];
                $vcpus1=$_POST["vcpus"];
                $ram1=$_POST["ram"];
                $network1=$_POST["network"];
                exec("/bin/bash /var/www/html/ins2.sh $vmname1 $vcpus1 $ram1");
				$a1=" Install Finished !!";
                ?>
                </h2>
                <hr>
                <h3><?=$a1?></h3>
				
				<div id="center">
				<form action="mysqlcon.php" method="post">
				<input type="submit" value="go to VM list" style="font-size : 20px; witdh: 50px;">
				</div>
				
	<br><br><br><br><br><br><br><hr>
	<div style= "font-size:2em; margin:auto; color:#333333; font-family:impact" align="center" >
	<p><b>contact</b></p>
	</div>
	<div style= "font-size:1.5em; margin:auto; font-family:impact" align="center" >
	<img src="phone.png" width="30" height="30"> Phone  010-xxxx-xxxx<br>
	<p>	<img src="email.png" width="30" height="30"> Email	ciw0707@naver.com</P>
	</div>
</body>
</html>
