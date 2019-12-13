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
    <form class="form signup-form" action="Database/Scripts/survey.scr.php" method="post">
        <input class="input signup-input" type="text" name="surveyname" placeholder="Survey Name">
        <input class="input signup-input" type="text" name="surveychoice1" placeholder="Choice 1">
        <input class="input signup-input" type="text" name="surveychoice2" placeholder="Choice 2">
        <input class="input signup-input" type="text" name="surveychoice3" placeholder="Choice 3">
        <a href="adminpage.php"><button class="btn btn-primary btn-submit" type="button">Back</button></a>
        <button class="btn btn-primary btn-submit" type="submit" name="survey-submit">Submit</button>
    </form>
    </section>
</body>

</html>