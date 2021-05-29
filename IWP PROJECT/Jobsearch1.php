
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="job.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    <title>Job Search</title>
  </head>
  <body>
  <header>
    <a href="welcome.html" class="logo">Qu-Impress</a>
        <ul>
            <!--Welcome link will refresh page. Rest will direct to new page-->
            <li ><a href="welcome.html">Welcome</a></li>
            <li><a href="AboutUS.html">About Us</a></li>
            <li id="Job"><a href="Jobsearch1.php">Job Search</a></li>
            <li><a href="AdminLogin.php">Admin login</a></li>
            <li><a href="UserLogin.php">User login</a></li>
        </ul>
    </header>
  <div class="background">
    <div class="layer">
        <br><br><br>
      <div class="title">
        <b>Search For Your Dream Job</b>
      </div>
      <div class=container>
        <form class="example" method="post">
          <input type="text" placeholder="Title" name="title">
          <input type="text" placeholder="Location" name="loc">
          <button type="submit" name="sub"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>

  <?php


if(isset($_POST['sub']))
{
    $title=$_POST['title'];
    $location=$_POST['loc'];

require_once "Careerjet_API.php" ;

$api = new Careerjet_API('en_GB') ;


$page = 1 ; # Or from parameters.

$result = $api->search(array(
  'keywords' => $title,
  'location' => $location,
  'page' => $page ,
  'affid' => '678bdee048',
));


?>
  <?php

     if ( $result->type == 'JOBS' ){

    ?>
    <br><br>
    <div>
        <p class="p1">Found <?=$result->hits?> Jobs on <?=$result->pages?> Pages <br><br>
        Top 20 Results.....</p>
    </div>
    <?php
    $jobs = $result->jobs;
    ?>
  <div class="container-xl">
  <div class="accordion" id="accordionExample">
  <?php
   $i=1;
    foreach( $jobs as $job ){
        ?>
    
  <div class="accordion-item" style="text-align:left;">
    <h2 class="accordion-header" id="heading<?=$i?>">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>" style="font-size:18px;padding:30px;">
        <?=$i.". ".$job->title?>
      </button>
    </h2>
    <div id="collapse<?=$i?>" class="accordion-collapse collapse" aria-labelledby="heading<?=$i?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong><?=$job->title?></strong><br><strong>Location:</strong><?=$job->locations?>
       <br><strong>Company:</strong><?=$job->company?>

       
        <br><strong>Salary:</strong><?php
        if($job->salary=="")
        echo "NA";
        else
        echo $job->salary?>
       <br><strong>Date Posted:</strong><?=$job->date?>
       <br><strong>Description:</strong><?=$job->description?>
        <br><br>
        <button class="btn btn-success"><a href= <?=$job->url?>>Apply</a></button>
      </div>
    </div>
  </div>
  
  
  <?php
    $i++;
    }
}
# When location is ambiguous
if ( $result->type == 'LOCATIONS' ){
  $locations = $result->solveLocations ;
  foreach ( $locations as $loc ){
    echo $loc->name."\n" ; # For end user display
    ## Use $loc->location_id when making next search call
    ## as 'location_id' parameter
  }
}
}


?>


  
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>