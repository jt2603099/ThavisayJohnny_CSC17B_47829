<?php


if (isset($_POST['editproduct-submit'])) {

    require 'dbh.scr.php';

    $id = $_POST['pid'];
    $pname = $_POST['newproductname'];
    $pdesc = $_POST['newproductdesc'];
    $pprice = $_POST['newproductprice'];
    $pamount = $_POST['newproductamount'];

    if (empty($pname) || empty($pdesc) || empty($pprice) || empty($pamount)) {
        header("Location: ../../product.php?error=emptyfield");
        exit();
    }

    $sql = "UPDATE `jthavisay_shoppingcart`.`product` 
                SET `Name` = '$pname', `Description` = '$pdesc', `Price` = '$pprice', `Amount` = '$pamount' 
            WHERE `id` = '$id';";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../product.php?submit=fail");
        exit();
    } else {
        mysqli_stmt_execute($stmt);
        header("Location: ../../product.php?submit=success");
        exit();
    }
}

?>