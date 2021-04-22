<!DOCTYPE html>
<html>
<head>
        <title>가상머신 생성 페이지</title>
        <link rel="stylesheet" href="css1.css" type="text/css">
</head>


<body>
<!-- 메뉴바-->        
        <div id="main"> MANAGEMENT PAGE<br></div>

        <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="instance.html">CreateVM</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="mysqlcon.php">DB</a></li>
        </ul>

<!-- 본문-->

        <h1>Create KVM Instance</h1><hr><br>

        <div style="text-align: center;">                
                step1 > <b>step2.Check Your Select</b> > step3<br><br>
        </div><br><br>

        <h2> [selected setting]<br> </h2>

<!-- 1.post로 받은 변수 표현 -->
        <h1>
                <?php
                $vmname=$_POST["vmname"];
                $vcpus=$_POST["vcpus"];
                $ram=$_POST["ram"];
                $network=$_POST["network"];
                echo "vmname : "."$vmname"."<br>";
                echo "vmcpus : "."$vcpus"."<br>";
                echo "vram : "."$ram"."<br>";
                echo "network : "."$network"."<br>";
                ?>
        </h1>

<!-- 2.취소하고 이전 페이지로 이동-->        
        <div id="center">
                <form action="instance.html" method="post">
                        <input type="submit" value="cancel" style="font-size : 26px; witdh: 50px; display: inline;">
                </form>

<!-- 3.post로 변수 전달-->
                <form action="result.php" method="post" >
                        <input type=hidden name=vmname value=<?=$vmname?>>
                        <input type=hidden name=vcpus value=<?=$vcpus?>>
                        <input type=hidden name=ram value=<?=$ram?>>
                        <input type=hidden name=network value=<?=$network?>>
                        <input type="submit" value="install" style="font-size : 26px;  display: inline; witdh: 50px;" >
                </form>
        </div>


<!-- 하단 연락처-->
        <br><br><br><br><br><br><br><hr>
        <div style= "font-size:2em; margin:auto; color:#333333; font-family:impact" align="center" >
                <p><b>contact</b></p>
        </div>
        
        <div style= "font-size:1.5em; margin:auto; font-family:impact" align="center" >
                <img src="phone.png" width="30" height="30"> Phone  010-xxxx-xxxx<br>
                <p><img src="email.png" width="30" height="30"> Email      ciw0707@naver.com</P>
        </div>
        
</body>
</html>
