
<?php 
include('connection.php')
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <form method="POST">
    <div class="login-box">
        <h1>Login</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="un">
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="ps">
        </div>
        <br>
        
        <input type="submit" class="btn" value="Sign-in" name="sub">
        </div>
    </form>
        
    
    <?php
            if(isset($_POST['sub']))
            {
                $un=$_POST['un'];
                 $ps=$_POST['ps'];
                 $q=$db->prepare("SELECT *FROM admin WHERE UID='$un' && Pass='$ps'");
                 $q->execute();
                 $res=$q->fetchAll(PDO::FETCH_OBJ);
                 if($res)
                 {
                    header("Location:admin.php");
                 }
                 else
                 {
                    echo "<script>alert('Wrong User')</script>";
                 }
            }   
            ?>
</body>

</html>