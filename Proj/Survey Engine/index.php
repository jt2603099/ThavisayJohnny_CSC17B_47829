<?php
    include 'Database/includes/autoloader.php';
    require "header.php"
?>
    <head>
      <title>Survey | Home</title>
      <meta name="description" content="Survey Engine Demo">
    </head>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset=utf-8"/>
    <title>Form to add questions to a Survey</title>
  </head>

  <body>
    <section class="container content-section">
          <form class="form signup-form surveyForm" action="Database/Scripts/survey.scr.php" method="post">
            <input class="input signup-input" type="text" name="surveyname" placeholder="Survey Name">
            <input class="input signup-input" type="text" name="surveychoice1" placeholder="Choice 1">
            <input class="input signup-input" type="text" name="surveychoice2" placeholder="Choice 2">
            <input class="input signup-input" type="text" name="surveychoice3" placeholder="Choice 3">
            <button class="btn btn-submit btn-primary" name="index-addsurvey" type="submit"> Submit</button>
          </form>
    </section>

<?php
require "footer.php"
?>

</html>