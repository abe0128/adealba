<?php
    include 'dbConnection.php';
    
    $connection = getDatabaseConnection("heroku_c3a87e9274bc026");
    
    function getCategories($catId) 
    {
        global $connection;
        
        $sql = "SELECT catId, catName from category ORDER BY catName";
        
        $statement = $connection->prepare($sql);
        $statement->execute();
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record) 
        {
            echo "<option  ";
            echo ($record["catId"] == $catId)? "selected": ""; 
            echo " value='".$record["catId"] ."'>". $record['catName'] ." </option>";
        }
    }
    
    function getProductInfo()
    {
        global $connection;
        $sql = "SELECT * FROM console WHERE console_id = " . $_GET['console_id'];
    
        //echo $_GET["productId"];
        
        $statement = $connection->prepare($sql);
        $statement->execute();
        $record = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    
    if (isset($_GET['updateProduct'])) 
    {
        
        //echo "Trying to update the product!";
        
        $sql = "UPDATE console
                SET console_id = :console_id,
                    console_title = :console_title,
                    console_genre = :console_genre,
                    console_rating = :console_rating,
                    console_year_released = :console_year_released,
                    console_platform = :console_platform,
                    console_price = :console_price,
                    console_description = :console_description,
                    catId = :catId,
                    console_image = :console_image
                WHERE console_id = :console_id";
        $np = array();
        $np[":console_id"] = $_GET['console_id'];
        $np[":console_title"] = $_GET['console_title'];
        $np[":console_genre"] = $_GET['console_genre'];
        $np[":console_rating"] = $_GET['console_rating'];
        $np[":console_year_released"] = $_GET['console_year_released'];
        $np[":console_platform"] = $_GET['console_platform'];
        $np[":console_price"] = $_GET['console_price'];
        $np[":console_description"] = $_GET['console_description'];
        $np[":catId"] = $_GET['catId'];
        $np[":console_image"] = $_GET['console_image'];
        
        
        
        $statement = $connection->prepare($sql);
        $statement->execute($np);
    }
    
    
    if(isset ($_GET['console_id']))
    {
        $product = getProductInfo();
    }
    
    //print_r($product);
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Product </title>
        
    </head>
    <body>
        <h1>Update Product</h1>
        
        <form>
            <input type="hidden" name="console_id" value= "<?=$product['console_id']?>"/>
            
            Product name: <input type="text" value = "<?=$product['console_title']?>" name="console_title"><br>
            
            Genre: <input type="text" value = "<?=$product['console_genre']?>" name="console_genre"><br>
            
            Rating: <input type="text" value = "<?=$product['console_rating']?>" name="console_rating"><br>
            
            Year Released: <input type="text" value = "<?=$product['console_year_released']?>" name="console_year_released"><br>
            
            Platform: <input type="text" value = "<?=$product['console_platform']?>" name="console_platform"><br>
            
            Price: <input type="text" name="console_price" value = "<?=$product['console_price']?>"><br>
            
            Description: <textarea name="console_description" cols = 50 rows = 4><?=$product['console_description']?></textarea><br>
            
            Set Image Url: <input type = "text" name = "console_image" value = "<?=$product['console_image']?>"><br>
            
            Category: <select name="catId">
                <option>Select One</option>
                <?php getCategories( $product['catId'] ); ?>
            </select> <br />
            
            <input type="submit" name="updateProduct" value="Update Product">
            
        </form>
    </body>
</html>