<?php

include 'dbConnection.php';

$conn = getDatabaseConnection("heroku_c3a87e9274bc026");

$sql = "DELETE FROM om_product WHERE productId = " . $_GET['productId'];
$statement = $conn->prepare($sql);
//$statement->execute();

header("Location: admin.php");
?>