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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!--Iframe to display it-->
  <form action="/IWP Project/feedback.php">
				<button type="submit" class="btn btn-danger" style="position: absolute;top:18px;left:1389px"name="sub" >Logout</button>
			</form>
<!-- /Quimpress/IWP Project/feedback.php -->
    <iframe src="https://www.jdoodle.com/h/1g1" frameborder="0" width="1500" height="700"></iframe>
        
</body>
</html>