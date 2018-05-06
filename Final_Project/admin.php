<?php

session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}
include 'dbConnection.php';
$conn = getDatabaseConnection("heroku_c3a87e9274bc026");

function displayAllProducts()
{
    global $conn;
    $sql="SELECT * FROM console";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $records;
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page </title>
        <style>
            
            form 
            {
                display: inline;
            }
            
        </style>
        
        <script>
            
            function confirmDelete() 
            {
                
                return confirm("Are you sure you want to delete it?");
                
            }
            
        </script>
        
    </head>
    <body>


        
        <h1> Admin Main Page </h1>
        
        <h3> Welcome <?=$_SESSION['adminName']?>! </h3>
        
        <br />
        <form action="addProduct.php">
            <input type="submit" name="addproduct" value="Add Product"/>
        </form>
        <form action="logout.php">
            <input type="submit" value="Logout"/>
        </form>
        
        <br />
        <strong> Products: </strong> <br />
        
        <?php $records=displayAllProducts();
            foreach($records as $record) {
                echo "[<a href='updateProduct.php?console_id=".$record['console_id']."'>Update</a>]";
                echo "<form action='deleteProduct.php' onsubmit='return confirmDelete()'>";
                echo "<input type='hidden' name='console_id' value= " . $record['console_id'] . " />";
                echo "<input type='submit' value='Remove'>";
                echo "</form>";
                
                echo $record['console_title'];
                echo '<br>';
            }
        ?>
        
        

    </body>
</html>