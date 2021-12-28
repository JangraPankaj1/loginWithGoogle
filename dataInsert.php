<?php 
// Load the database configuration file 
include 'dbconnect.php'; 

//include 'index.php'; 
// Retrieve POST data and convert JSON to PHP array 

  
echo $query = "INSERT INTO users SET  first_name = '".$_SESSION['user_first_name']."', last_name = '".$_SESSION['user_last_name']."', picture = '".$_SESSION['user_image']."' "; 
$insert = $db->query($query); 
    die();

?>