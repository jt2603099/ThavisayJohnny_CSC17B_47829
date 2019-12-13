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
        <h2 class="section-header">Table of Surveys</h2>
        <a class="btn btn-primary btn-submit" id="survey-to-home" href="index.php">Home</a>
        <a class="btn btn-primary btn-submit" id="add-a-survey" href="adminpage-addsurvey.php">Add a survey</a>    
        <?php
            $surveys = new ViewSurvey();
            $surveys->showAllSurveys();
        ?>
    </section>
</body>

</html>