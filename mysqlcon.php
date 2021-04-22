<!DOCTYPE html>
<html>
<head>
        <title> mysqlcontest </title>
        <link rel="stylesheet" href="css1.css" type="text/css">
</head>

<body>
<!-- 메뉴바-->        
        <div id="main"> MANAGEMENT PAGE<br> </div>

        <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="instance.html">CreateVM</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="mysqlcon.php">DB</a></li>
        </ul>
        
<!-- 1.Mariadb와 연결 여부 확인, view테이블에서 몇줄이 나오는지 확인-->        
        <p>
        <?php
        $con = mysqli_connect("localhost", "user1", "user1","testdb") or die ("Mysql connection fail !!!");
        echo ("MYSQL CON success!!");
        $sql = "SELECT * FROM vm_view";
        $ret = mysqli_query($con, $sql);

        if ($ret) {
        echo "(".mysqli_num_rows($ret), "rows serch)"."<br>"."<br>";
        }

        else {
        echo "데이터 조회실패!!"."<br>";
        exit();
        }
        ?>
        </p>

<!-- 2.불러온 데이터를 이용하여 테이블 생성-->
        <div align="center">
                <h1> vm list </h1>

                <?php
                echo"<TABLE>";
                echo"<TR>";
                echo "<TH>Hostname</TH><TH>HostIP</TH><TH>cpurate</TH><TH>vmname</TH><TH>vcpus</TH><TH>vram</TH>";
                echo"</TR>";

                while($row = mysqli_fetch_array($ret)) {
                        echo "<TR>";
                        echo "<TD>".$row['hostname']."</TD>";
                        echo "<TD>".$row['ipaddr']."</TD>";
                        echo "<TD>".$row['cpurate']."</TD>";
                        echo "<TD>".$row['vmname']."</TD>";
                        echo "<TD>".$row['vcpus']."</TD>";
                        echo "<TD>".$row['vram']."</TD>";
                        echo "</TR>";
                }
                echo"</TABLE>";
                mysqli_close($con);
                ?>
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
