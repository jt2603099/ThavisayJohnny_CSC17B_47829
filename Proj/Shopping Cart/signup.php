<?php
    include 'Database/includes/autoloader.php';
    require "header.php"    
?>

<section class="container content-section">
    <h1>Signup</h1>
    <form class="form signup-form" action="Database/Classes/signup.inc.php" method="post">
        <input class="input signup-input" type="text" name="uid" placeholder="Username">
        <input class="input signup-input" type="text" name="mail" placeholder="E-mail">
        <input class="input signup-input" type="password" name="pwd" placeholder="Password">
        <input class="input signup-input" type="password" name="pwd-repeat" placeholder="Repeat password">
        <button class="btn btn-primary" type="submit" name="signup-submit">Submit</button>
    </form>
</section>



<?php
require "footer.php"
?>

</html>