<?php
    echo "Please wait while we are validiting your input...<br>";
    if($_POST["psw"] == "1234" && $_POST["user"] == "admin"){
        echo "Welcome";
        $pswEnc = md5($_POST["psw"]);
        $userEnc = md5($_POST["user"]);
        header("Location: ../../Index/index.php?from=validate.php&username=".$pswEnc."&password=".$userEnc."&input=correct");
    }else{
        echo "Error";
    }
    //header("Location: ../index.php?error=01&time=".date("h:i:sa")."&page=validate.php");
?>