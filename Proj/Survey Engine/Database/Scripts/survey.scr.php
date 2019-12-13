<?php

if (isset($_POST['index-addsurvey'])) {
    
    require 'dbh.scr.php';

    $sname = $_POST['surveyname'];
    $choice1 = $_POST['surveychoice1'];
    $choice2 = $_POST['surveychoice2'];
    $choice3 = $_POST['surveychoice3'];

    if (empty($sname) || empty($choice1) || empty($choice2) || empty($choice3)) {
        header("Location: ../../adminpage-addsurvey.php?error=emptyfield");
        exit();
    }

    $sql = "INSERT INTO survey (Name, Answer_1, Answer_2, Answer_3) VALUES ('$sname', '$choice1', '$choice2', '$choice3');";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../index.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_execute($stmt);
        header("Location: ../../index.php?submit=success");
        exit();
    }
}
    


if (isset($_POST['survey-submit'])) {

    require 'dbh.scr.php';

    $sname = $_POST['surveyname'];
    $choice1 = $_POST['surveychoice1'];
    $choice2 = $_POST['surveychoice2'];
    $choice3 = $_POST['surveychoice3'];

    if (empty($sname) || empty($choice1) || empty($choice2) || empty($choice3)) {
        header("Location: ../../adminpage-addsurvey.php?error=emptyfield");
        exit();
    }

    $sql = "INSERT INTO survey (Name, Answer_1, Answer_2, Answer_3) VALUES ('$sname', '$choice1', '$choice2', '$choice3');";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../adminpage-addsurvey.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_execute($stmt);
        header("Location: ../../adminpage-addsurvey.php?submit=success");
        exit();
    }
}

?>