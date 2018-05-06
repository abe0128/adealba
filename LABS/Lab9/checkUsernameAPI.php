<?php

// function getDatabaseConnection($dbName) 
// {
//   $host = "localhost";
//   $dbname = $dbName;
//   $username = "root";
//   $password = "";
   
//   //checks whether the URL contains "herokuapp" (using Heroku)
//   if(strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) 
//   {
//     $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//     $host = $url["host"];
//     $dbname = substr($url["path"], 1);
//     $username = $url["user"];
//     $password = $url["pass"];
//   }
   
//   $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//   $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  
//   return $dbConn;
// }

include '../../../dbConnection.php';
  $conn = getDatabaseConnection("c9");
  $username = $_GET['username'];
    
  $sql = "SELECT * FROM Lab9_user WHERE username = :username";
    
  $statement = $conn->prepare($sql);
  $statement->execute();
  $records = $statement->fetchAll();
  echo json_encode($records);