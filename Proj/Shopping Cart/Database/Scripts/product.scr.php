<?php


if (isset($_POST['product-submit'])) {

    require 'dbh.scr.php';

    $pname = $_POST['productname'];
    $pdesc = $_POST['productdesc'];
    $pprice = $_POST['productprice'];
    $pamount = $_POST['productamount'];

    if (empty($pname) || empty($pdesc) || empty($pprice) || empty($pamount)) {
        header("Location: ../../adminpage-addproduct.php?error=emptyfield");
        exit();
    }

    $sql = "INSERT INTO product (Name, Description, Price, Amount) VALUES ('$pname', '$pdesc', '$pprice', '$pamount');";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../adminpage-addproduct.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_execute($stmt);
        header("Location: ../../adminpage-addproduct.php?submit=success");
        exit();
    }
}

?>