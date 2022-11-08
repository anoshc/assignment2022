<?php
include "functions.php";
require_once "classes/class_User.php";
require_once "classes/class_Product.php";

displayNavBar();
$product = new Product();
$products = $product->getData();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce - Product Page </title>
    <link rel="stylesheet" href="style/main.css">
</head>

<body>

    <?php

    if (count($products) > 0) {

        for ($i = 0; $i < count($products); $i++) {
    ?>
            <div class="whole-row">
                <div class="row"> <?php echo $products[$i]['product_id']; ?></div>
                <div class="row"> <?php echo $products[$i]['product_name']; ?></div>
                <div class="row"> <img class="img" src="data/<?php echo $products[$i]['image_name']; ?>" width="100" height="100" /></div>
                <div class="row"><?php echo $products[$i]['description']; ?></div>
                <div class="row"> <?php echo $products[$i]['price'] . "<br>"; ?></div>
            </div>
    <?php
        }
    }



    // Display specific information about product selected in the previous page. 
    // Note that the product page can only be accessed from the main page. 
    // Add a form : with a select field to choose quantity, and a submit button named "Add to cart", which will populate the shopping cart. 
    // Shopping cart information can be preserved in a cookie. If the user closes the browser and reopens the page, the shopping cart information can be repopulated from the cookie. 
    // Modify the shopping cart link in the navigation bar when an item is added to it. 


    ?>



</body>

</html>