<?php

session_start();
$db=new PDO('mysql:host=localhost;dbname=quimpress','root','');
// Declaring and hoisting the variables
$_SESSION['username'] = "abhinav1234";
$email    = "";
$errors = array();
$_SESSION['success'] = "";
  
// DBMS connection code -> hostname,
// username, password, database name

?>