<?php
session_start();
$_SESSION["val"]="4";
$_SESSION["type"]="Portfolio";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Linking jdoodle. Compiler interface-->
    <script src=”https://www.jdoodle.com/assets/jdoodle-pym.min.js” type=”text/javascript”></script>
</head>
<body>
    <!--Iframe to display it-->
    <button style="position:absolute;top:0px;left:0px;background-color:black;"><a href="/Quimpress/IWP Project/feedback.php">Logout</a></button>
    <iframe src="https://www.jdoodle.com/h/1g1" frameborder="0" width="1500" height="700"></iframe>
        
</body>
</html>