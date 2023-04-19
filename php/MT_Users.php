<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIMALTECH_Users</title>
    <link rel="stylesheet" href="./css/MTSTYLE_Users.css">
</head>
<body>

<table>
    <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
    </tr>

<?php 
   $username = "website_adm"; 
   $password = "emrciKTD43kJ)U06";
   $host = "localhost";
   $database = 'minimaltech';
   
   $connection = new mysqli($host, $username, $password, $database);
   
   if($connection->connect_error){
    die("Connection failed: " . $connection->connect_error);
}

$result = $connection->query("SELECT * FROM mtusers");

while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo  "<td> {$row['user_ID']} </td>
    <td> {$row['firstName']} </td>
    <td> {$row['lastName']} </td>
    <td> {$row['email']} </td>";
  

    echo "</tr>";
}
echo "</table>";
    
    ?>
    
</body>
</html>