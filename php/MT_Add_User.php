<?php


$username = "website_adm"; 
$password = "emrciKTD43kJ)U06";
$host = "localhost";
$database = 'minimaltech';

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
  
  header("Location: ./MT_Users.php");
  }
  
 

 





?>