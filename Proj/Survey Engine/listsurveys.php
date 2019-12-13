<?php
    include 'Database/includes/autoloader.php';
    require "header.php"
?>

<!DOCTYPE html>
<html>

    <body>
        <section class="container content-section">
        <?php
        $listAllSurveys = new ViewSurvey();
        $listAllSurveys->listSurveys();
        ?>
        </section>



<?php
require "footer.php"
?>

</html>
