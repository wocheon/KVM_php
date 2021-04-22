<!DOCTYPE HTML>
<HTML>
        <head>
                <link rel="stylesheet" href="css1.css" type="text/css">
        <head>

        <body>
                <?PHP

        $username =$_POST["input1"];
        $password =$_POST["input2"];;

        $db_data["username"]="ciw0707";
        $db_data["password"]="diak1351";


        if ( $username == $db_data["username"] && $password == $db_data["password"] )
        echo("<script>location.href='index1.html';</script>");
        else

        echo("<script>location.href='index.html';</script>");
                ?>
        </body>

</HTML>
