<?php

include 'dbConnection.php';

$conn = getDatabaseConnection("heroku_c3a87e9274bc026");

$sql = "DELETE FROM console WHERE console_id = " . $_GET['console_id'];
$statement = $conn->prepare($sql);
//$statement->execute();

header("Location: admin.php");
?>