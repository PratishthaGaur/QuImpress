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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <li><a href="Jobsearch1.php">Job Search</a></li>                    
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
    <?php
        $q1=$db->prepare("SELECT AVG(Rating) as avg1 from feedback1 WHERE CatalogNo='3'");
        $q1->execute();
        $r1=$q1->fetch();
        $q2=$db->prepare("SELECT AVG(Rating) as avg2 from feedback1 WHERE CatalogNo='4'");
        $q2->execute();
        $r2=$q2->fetch();
    ?>
    <section>
    <div class="section1">
        <!--First item in catalouge. Click the image to direct to preview and code for item-->
        <img src="section1.jpeg" alt="" class="img1">
        <div class="title1 box">
            <button onclick="document.location='portfolio2.html'" class="preview" >Preview</button>
            
            <form method="POST" name="form1">
            <button type="submit" class="customize" name="sub">Customize</button>
            </form>
            <br><br><br> Especially for <br> Graphic designer <br>
            <span id="1" class="fa fa-star"></span> 
            <span id="2" class="fa fa-star"></span> 
            <span id="3" class="fa fa-star"></span> 
            <span id="4" class="fa fa-star"></span> 
            <span id="5" class="fa fa-star"></span>
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
            <br><br><br>Especially for <br>Web Developer <br>
            <span id="6" class="fa fa-star"></span> 
            <span id="7" class="fa fa-star"></span> 
            <span id="8" class="fa fa-star"></span> 
            <span id="9" class="fa fa-star"></span> 
            <span id="10" class="fa fa-star"></span> 
        </div>
    </div>
    </section>
    </div>
    <?php
        for($i=1;$i <=$r1['avg1'] ;$i++){
            echo"<script>";
            echo "document.getElementById(`$i`).className = 'fa fa-star checked1'";
             echo"</script>";
        }
        for($i=6;$i <=$r2['avg2']+5 ;$i++){
            echo"<script>";
            echo "document.getElementById(`$i`).className = 'fa fa-star checked2'";
            echo"</script>";
        }
    ?>
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