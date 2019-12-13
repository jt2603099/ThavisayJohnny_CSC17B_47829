<?php


if (isset($_POST['editsurvey-submit'])) {

    require 'dbh.scr.php';

    $id = $_POST['sid'];
    $sname = $_POST['newsurveyname'];
    $choice1 = $_POST['nschoice1'];
    $choice2 = $_POST['nschoice2'];
    $choice3 = $_POST['nschoice3'];

    if (empty($sname) || empty($choice1) || empty($choice2) || empty($choice3)) {
        header("Location: ../../survey.php?error=emptyfield");
        exit();
    }

    $sql = "UPDATE `jthavisay_survey`.`survey` 
                SET `Name` = '$sname', `Answer_1` = '$choice1', `Answer_2` = '$choice2', `Answer_3` = '$choice3' 
            WHERE `id` = '$id';";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../survey.php?submit=fail");
        exit();
    } else {
        mysqli_stmt_execute($stmt);
        header("Location: ../../survey.php?submit=success");
        exit();
    }
}

?>