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
        <h1 class="section-header" style="margin: 5px 5px">Edit product</h1>
            <?php
            if (isset($_GET['id'])) {
                $product = new ViewProduct();
                $product->showProduct($_GET['id']);      
                }
            if (isset($_GET['submit'])) {
                if ($_GET['submit'] == "success") {
                    echo '<p class="signup-success">Edit successful!</p>';
                    echo '<div class="btn-center"><a class="btn btn-primary btn-margin" href="javascript:history.back()">Back</a>';
                    echo '<a class="btn btn-primary btn-margin" href="adminpage.php">To table</a></div>';
                } else if ($_GET['submit'] == "fail") {
                    echo '<p class="signup-error">Edit failed!</p>';
                }
            }
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfield") {
                    echo '<p class="signup-error">Edit failed!</p>';
                }   
            }
            ?>
    </section>


</body>
</html>