<?php 
include('connection.php');
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Feedback Form</title>
    <link rel="stylesheet" href="feedback.css">
	
</head>
<body>

<section>
    <div class="feedback">
        <p>Dear Customer,<br>
        Thank you for visiting our website. We would like to know how we performed. Please spare some moments to give us your valuable feedback as 
        it will help us in improving our service.</p>
        <h4>Please rate your experience</h4>

        <form method="post" action="#action-url">
            <div class="clear"></div> 
            <hr class="survey-hr">
            <label>1. Liking for catalog</label><br>
            <span class="star-rating">
            <input type="radio" name="rating" value="1"><i></i>
            <input type="radio" name="rating" value="2"><i></i>
            <input type="radio" name="rating" value="3"><i></i>
            <input type="radio" name="rating" value="4"><i></i>
            <input type="radio" name="rating" value="5"><i></i>
            </span>

            <div class="clear"></div> 
            <hr class="survey-hr"> 
            <label for="m_3189847521540640526commentText">2. Any Other suggestions:</label><br/><br/>
            <textarea cols="75" name="commentText" rows="5" style="100%"></textarea><br>
            <br>
            <div class="clear"></div> 
            <input type="submit" name="submit" value="Submit your review">&nbsp;
        </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $Rating=$_POST['rating'];
        
        $Review=$_POST['commentText'];
        $CatalogNo=$_SESSION["val"];
        $Type=$_SESSION["type"];
        $q=$db->prepare("INSERT INTO feedback1 (CatalogNo,Type,Rating,Review) VALUES(:CatalogNo,:Type,:Rating,:Review)");
                   $q->bindValue('CatalogNo',$CatalogNo);
                    $q->bindValue('Type',$Type);
                    $q->bindValue('Rating',$Rating);
                    $q->bindValue('Review',$Review);
                    if($q->execute())
                    {
                        echo("Thank You For feedback");
                        session_unset();
                        session_destroy();
                        header("Location:welcome.html");
                    }
                    else{
                        echo("Error");
                    }
    }
    ?>
</section>
</body>
</html>