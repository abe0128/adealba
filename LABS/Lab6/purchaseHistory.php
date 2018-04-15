<?php


$productId = $_GET['productId'];

include 'dbConnection.php';
$conn = getDatabaseConnection("heroku_c3a87e9274bc026");

$productId = $_GET['productId'];

$sql = "SELECT * FROM `om_product`
        NATURAL JOIN om_purchase
        WHERE productId = :pId";

$np = array();
$np[":pId"] = $productId;

$stmt = $conn->prepare($sql);
$stmt->execute($np);
$records = $stmt->fetchAll(PDO:: FETCH_ASSOC);


echo $record[0]['productName'] . "<br>";
echo "<img src='" . $record[0]['productImage']. "' /><br/>";

foreach($records as $record)
{
    
    echo "Purchase Date: " . $record["purchaseDate"] . "<br />";
    echo "Unit Price: " . $record["unitPrice"] . "<br />";
    echo "Quantity: " . $record["quantity"] . "<br />";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>