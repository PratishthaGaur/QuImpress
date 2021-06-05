
<?php 
include('connection.php');
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>CV Catalouge</title>
        <meta name="description" content="">
        <meta name="robots" content="noindex, nofollow" />
        <!-- The compiled CSS file -->
        <link rel="stylesheet" href="CVindex.css">
        <!-- Web fonts -->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
        <!-- favicon.ico.-->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class="header">
            <a href="welcome.html" class="logo">Qu-Impress</a>
                <ul>
                    <!--Welcome link will refresh page. Rest will direct to new page-->
                    <li id="Welcome"><a href="welcome.html">Welcome</a></li>
                    <li><a href="AboutUS.html">About Us</a></li>
                    <li><a href="Jobsearch1.php">Job Search</a></li>
                    <li><a href="welcome.html">Logout</a></li>
                    
                </ul>


        </div>
    <!-- Header -->
    <header class="pt4 pb1">
        <div class="container pt4">

            <h1>Resume Catalouge</h1>
        </div>
    </header>
    <!-- Body -->
    <main>  
        <div class="container">
            <!-- Info -->
            <?php
            $q1=$db->prepare("SELECT AVG(Rating) as avg1 from feedback1 WHERE CatalogNo='1'");
            $q1->execute();
            $r1=$q1->fetch();
            $q2=$db->prepare("SELECT AVG(Rating) as avg2 from feedback1 WHERE CatalogNo='2'");
            $q2->execute();
            $r2=$q2->fetch();
            ?>
            <section class="grid-row grid-row--center">
                <!-- 1st Catalouge-->
                <div class="grid-column span-half pt3 pb3 mobile-m order-1">
                    <div class="relative">
                        <img class="info-image relative z2" src="resume-1.jpeg" alt="Standard">
                        <div class="pattern pattern--left-down absolute z1"></div>
                    </div>
                </div>
                <div class="grid-column span-half pt3 pb3 mobile-m order-2">
                    <a href="1/index.php"><h3>Standard Resume</h3></a>    
                    <span id="1" class="fa fa-star"></span> 
                    <span id="2" class="fa fa-star"></span> 
                    <span id="3" class="fa fa-star"></span> 
                    <span id="4" class="fa fa-star"></span> 
                    <span id="5" class="fa fa-star"></span>              
                    <p>Standard Resume don’t use fancy formats or new technology to impress potential employers. These are good for more traditional industries like Government contracting firms, consulting firms, law firms, accounting firms, for example, all expect more traditional resumes</p>
                </div>
                <!-- 2nd Catalouge -->
                <div class="grid-column span-half pt3 pb3 mobile-m order-4">
                    <a href="2/index.php"><h3>Modern Resume</h3></a>
                    <span id="6" class="fa fa-star"></span> 
                    <span id="7" class="fa fa-star"></span> 
                    <span id="8" class="fa fa-star"></span> 
                    <span id="9" class="fa fa-star"></span> 
                    <span id="10" class="fa fa-star"></span>   
                    <p>Modern Resume For instance, in place of an “objective” statement, you might strategically place keywords in a summary section so an applicant tracking system will sort your resume into the proper category.</p>
                </div>
                <div class="grid-column span-half pt3 pb3 mobile-m order-3">
                    <div class="relative">
                        <img class="info-image relative z2" src="resume-2.jpeg" alt="Modern">
                        <div class="pattern pattern--right-middle absolute z1"></div>
                    </div>
                </div>
            </section>
           <?php
                for($i=1;$i <=$r1['avg1'] ;$i++){
                    echo"<script>";
                    echo "document.getElementById(`$i`).className = 'fa fa-star checked'";
                    echo"</script>";
                }
                for($i=6;$i <=$r2['avg2']+5 ;$i++){
                    echo"<script>";
                    echo "document.getElementById(`$i`).className = 'fa fa-star checked'";
                    echo"</script>";
                }
           ?>
    </body>
</html>