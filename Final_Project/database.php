<?php
  function getDatabaseConnection()
  {
      
      $host = "us-cdbr-iron-east-05.cleardb.net";
      $username = "b02d4fafa2c107";
      $password = "95ca9032";
      $dbname= "heroku_c3a87e9274bc026";
  
  // Create connection
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      return $conn;
      
    }
    
    function getProducts($page,$sql) {
       global $namedParameters;
       $dbConn = getDatabaseConnection();
       
       $stmt = $dbConn->prepare($sql);
       $stmt->execute($namedParameters);
       $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $items;
    }
?>