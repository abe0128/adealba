<?php
session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}
include "dbConnection.php";
$conn = getDatabaseConnection("heroku_c3a87e9274bc026");

if (isset($_GET['submitProduct'])) 
{
    $console_title = $_GET['console_title'];
    $console_genre = $_GET['console_genre'];
    $console_rating = $_GET['console_rating'];
    $console_year_released = $_GET['console_year_released'];
    $console_platform = $_GET['console_platform'];
    $console_price = $_GET['console_price'];
    $console_description = $_GET['console_description'];
    $console_image = $_GET['console_image'];
    // $catId = $_GET['catId'];
    
    $sql = "INSERT INTO console
            ( `console_title`, `console_genre`, `console_rating`, `console_year_released`, `console_platform`, `console_price`, `console_description`, `console_image`) 
             VALUES ( :console_title, :console_genre, :console_rating, :console_year_released, :console_platform, :console_price, :console_description, :console_image)";
    $namedParameters = array();
    $namedParameters[':console_title'] = $console_title;
    $namedParameters[':console_genre'] = $console_genre;
    $namedParameters[':console_rating'] = $console_rating;
    $namedParameters[':console_year_released'] = $console_year_released;
    $namedParameters[':console_platform'] = $console_platform;
    $namedParameters[':console_price'] = $console_price;
    $namedParameters[':console_description'] = $console_description;
    $namedParameters[':console_image'] = $console_image;
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Add a product </title>
    </head>
    <body>
        <h1> Add a product</h1>
        <form>
            Product name: <input type="text" name="console_title"><br>
            Product genre: <input type="text" name="console_genre"><br>
            Product rating: <input type="text" name="console_rating"><br>
            Product release year: <input type="text" name="console_year_released"><br>
            Platform: <input type="text" name="console_platform"><br>
            Price: <input type="text" name="console_price"><br>
            Description: <textarea name="console_description" cols = 50 rows = 4></textarea><br>
            
            <!--Category: <select name="catId">-->
            <!--    <option value="">Select One</option>-->
            <!--    -->
            <!--</select> -->
            <br />
            Set Image Url: <input type = "text" name = "console_image"><br>
            <input type="submit" name="submitProduct" value="Add Product">
            
        </form>
    </body>
</html>