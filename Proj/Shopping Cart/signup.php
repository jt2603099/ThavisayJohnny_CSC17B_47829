<?php
    include 'Database/includes/autoloader.php';
    require "header.php"    
?>

<section class="container content-section">
    <h1 class="section-header">Signup</h1>
    <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p class="signup-error">Fill in all the fields!</p>';
            } else if ($_GET['error'] == "invalidmailuserid") {
                echo '<p class="signup-error">Invalid username and e-mail!</p>';
            } else if ($_GET['error'] == "invalidmail") {
                echo '<p class="signup-error">Invalid username!</p>';
            } else if ($_GET['error'] == "invaliduserid") {
                echo '<p class="signup-error">Invalid e-mail!</p>';
            } else if ($_GET['error'] == "passwordcheck") {
                echo '<p class="signup-error">Your passwords do not match!</p>';
            } else if ($_GET['error'] == "usertaken") {
                echo '<p class="signup-error">Username is already taken!</p>';
            }
        }
        else if (isset($_GET['signup']) == "success") {
            echo '<p class="signup-success"">Signup successful!</p>';
        }
    ?>
    <form class="form signup-form" action="Database/Classes/signup.inc.php" method="post">
        <input class="input signup-input" type="text" name="uid" placeholder="Username">
        <input class="input signup-input" type="text" name="mail" placeholder="E-mail">
        <input class="input signup-input" type="password" name="pwd" placeholder="Password">
        <input class="input signup-input" type="password" name="pwd-repeat" placeholder="Repeat password">
        <button class="btn btn-primary" type="submit" name="signup-submit" style="margin-bottom: 10px">Submit</button>
    </form>
</section>



<?php
require "footer.php"
?>

</html>