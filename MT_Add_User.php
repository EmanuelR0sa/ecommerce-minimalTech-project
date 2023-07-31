<?php


$username = /*"Your user name here";*/ 
$password = /*"Your password here;*/
$host = "localhost";
$database = /*"Your database name;*/

$connection = new mysqli($host, $username, $password, $database);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  } else {
 $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  

  $statement = $connection->prepare("INSERT INTO mtusers (firstName, lastName, email) VALUES (?, ? , ? )");
  $statement->bind_param("sss", $firstName, $lastName, $email);
  
  $statement->execute();

  if($statement->error){
      die("Error inserting user");
  }
  
  header("Location: ./index.php");
  }
  
 

 





?>