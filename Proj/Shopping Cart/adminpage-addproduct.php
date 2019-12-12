<?php
    include 'Database/includes/autoloader.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style/styles.css"/>
    </head>

<body>
    <section class="container container-section">
    <form class="form signup-form" action="Database/Scripts/product.scr.php" method="post">
        <input class="input signup-input" type="text" name="productname" placeholder="Product name">
        <input class="input signup-input" type="text" name="productdesc" placeholder="Product description">
        <input class="input signup-input" type="text" name="productprice" placeholder="Price">
        <input class="input signup-input" type="text" name="productamount" placeholder="Quantity">
        <a href="adminpage.php"><button class="btn btn-primary btn-submit" type="button">Back</button></a>
        <button class="btn btn-primary btn-submit" type="submit" name="product-submit">Submit</button>
    </form>
    </section>
</body>

</html>