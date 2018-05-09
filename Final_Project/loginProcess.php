<?php

    session_start();
    
    include 'dbConnection.php';
    
    $conn = getDatabaseConnection("heroku_c3a87e9274bc026");
    
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    
    //echo $password;
    
    
    //following sql does not prevent SQL injection
    $sql = "SELECT * 
            FROM admin
            WHERE username = '$username'
            AND   password = '$password'";
            
    //following sql prevents sql injection by avoiding using single quotes        
    $sql = "SELECT * 
            FROM admin
            WHERE username = :username
            AND   password = :password";    
            
    $np = array();
    $np[":username"] = $username;
    $np[":password"] = $password;
    
            
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //expecting one single record

    if (empty($record)) 
    {
        echo "Wrong username or password! <br><br> <a href= 'index.php'> Try Again! </a>";
        echo "<br>";
        
    }
    else
    {
        $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
        header("Location:admin.php");
    }
?>
<html>
    <head>
        <title>GameStahp</title>
        <meta charset="utf-8"/>
        <style>
            @import url(css/styles.css);
        </style>
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    </head>
    <body class="tryagain">
        <h1><strong><img src= "img/cracked.png"></h1></strong>
    </body>
</html>