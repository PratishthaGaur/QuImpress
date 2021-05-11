<?php 
include('connection.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Portfolio That suits you best!</title>
    <link rel="stylesheet" href="portfolio_page.css">
</head>
<body>
    <!--Outer most div tag or background-->
    <div class="main">
        <div class="header">            
            <a href="welcome.html" class="logo">Qu-Impress</a>                
            <ul>                    
                <!--Welcome link will refresh page. Rest will direct to new page-->                    
                <li><a href="welcome.html">Welcome</a></li>                    
                <li><a href="AboutUS.html">About Us</a></li>                    
                <li><a href="AboutUS.html">Job Search</a></li>                    
                <li><a href="welcome.html">Logout</a></li>                    
                               
            </ul>        
        </div> 
    <header>
        <!--Header-->
        
   <span>
    <br> <br> <br> <br> <br>
      <h1> Welcome to <br>Portfolio Catalouge</h1>
    </span>
    </header>
    <section>
    <div class="section1">
        <!--First item in catalouge. Click the image to direct to preview and code for item-->
        <img src="section1.jpeg" alt="" class="img1">
        <div class="title1 box">
            <button onclick="document.location='portfolio2.html'" class="preview" >Preview</button>
            
            <form method="POST" name="form1">
            <button type="submit" class="customize" name="sub">Customize</button>
            </form>
            <br><br><br> Especially for <br> Graphic designer
        </div>
    </div>
    <div class="section2">
        <!--Second item in catalouge. Click the image to direct to preview and code for item-->
        <img src="section2.jpg" alt="" class="img2">
        <div class="title2 box">
            <button onclick="document.location='portfolio.html'" class="preview" >Preview</button>
            <form method="POST" name="form2">
            <button type="submit" class="customize" name="sub1">Customize</button>
            </form>
            <br><br><br>Especially for <br>Web Developer</div>
    </div>
    </section>
    </div>
    
        <?php

          if(isset($_POST['sub']))
          {
            $Type="Portfolio";
		   $type_id=4;
		  
		  $q=$db->prepare("INSERT INTO download1(Type,type_id) VALUES(:Type,:type_id)");
		  
		  $q->bindValue('Type',$Type); 
		  $q->bindValue('type_id',$type_id);
		  if($q->execute())
            {
                header("Location:trial2.html");
            }
            else
            {
                echo"<script>alert('Error')</script>";
            }
          }
		  
          if(isset($_POST['sub1']))
          {
            $Type="Portfolio";
		   $type_id=3;
		  
		  $q=$db->prepare("INSERT INTO download1(Type,type_id) VALUES(:Type,:type_id)");
		  
		  $q->bindValue('Type',$Type); 
		  $q->bindValue('type_id',$type_id);
		  if($q->execute())
            {
                header("Location:trial.html");
            }
            else
            {
                echo"<script>alert('Error')</script>";
            }
          }
		  
		  
	  ?>
        
    
</body>
</html>