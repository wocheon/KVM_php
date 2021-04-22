<!DOCTYPE HTML>
<html>
<head>
        <title> yum list installed </title>
        <link rel="stylesheet" href="css1.css" type="text/css">
<head>

<body>
<!-- 메뉴바-->
        <div id="main"> MANAGEMENT PAGE<br></div>

        <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="instance.html">CreateVM</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="mysqlcon.php">DB</a></li>
        </ul>

<!-- 본문-->

        <h1>Create KVM Instance</h1><hr><br>

        <div style="text-align: center;">
                step1 > step2 > <b>step3.Finished</b><br><br>
        </div>


        <?php
        ob_start();
        echo str_pad('', 4096);
        echo "<h1>installing....</h1>";
        echo "<h3>please wait<br>It take a few minute.</h3>";
        $vmname=$_POST["vmname"];
        $vcpus=$_POST["vcpus"];
        $ram=$_POST["ram"];
        $network=$_POST["network"];
        ?>


        <form name="hiddenform" action="result.php" method="post" >
        <input type=hidden name=vmname value=<?=$vmname?>>
        <input type=hidden name=vcpus value=<?=$vcpus?>>
        <input type=hidden name=ram value=<?=$ram?>>
        <input type=hidden name=network value=<?=$network?>>
        </form>

        <script>
        document.hiddenform.submit();
        </script>


        <?php
        ob_flush();
        flush();
        ob_end_flush();
        echo("<script>location.href='result.php';</script>");
        ?>

<!-- 하단 연락처 -->
        <br><br><br><br><br><br><br><hr>
        <div style= "font-size:2em; margin:auto; color:#333333; font-family:impact" align="center" >
                <p><b>contact</b></p>
        </div>

        <div style= "font-size:1.5em; margin:auto; font-family:impact" align="center" >
                <img src="img/phone.png" width="30" height="30"> Phone  010-xxxx-xxxx<br>
                <p><img src="img/email.png" width="30" height="30"> Email      ciw0707@naver.com</P>
        </div>


</body>
</html>
