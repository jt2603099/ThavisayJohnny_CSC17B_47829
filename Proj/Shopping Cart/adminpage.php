<?php
    include 'Database/includes/autoloader.php';
    
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style/styles.css"/>
    </head>

<body>
    <section class="container content-section">
        <h2 class="section-header">Table of Products</h2>
        <a class="btn btn-primary btn-submit" id="product-to-home" href="index.php">Home</a>
        <a class="btn btn-primary btn-submit" id="add-a-product" href="adminpage-addproduct.php">Add a product</a>    
        <?php
            $products = new ViewProduct();
            $products->showAllProducts();
        ?>
    </section>
</body>

</html>