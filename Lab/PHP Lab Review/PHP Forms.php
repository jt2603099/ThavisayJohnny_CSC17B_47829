<!DOCTYPE html>
<html>

<!-- Exercise 1
<form action="welcome.php" method="get">
First name: <input type="text" name="fname">
</form> -->

<body>
    Welcome <?php echo $_GET["fname"]; ?>
</body>

<!-- Exercise 2
 <form action="welcome.php" method="post">
 First name: <input type="text" name="fname">
 </form> -->

 <body>
     Welcome <?php echo $_POST["fname"]; ?>
</body>

</html>