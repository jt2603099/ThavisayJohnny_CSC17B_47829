<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style/styles.css"/>
    </head>
<body>
    <header class="main-header">
        <nav class="main-nav nav">
              <ul>
                <li class="home-ref"><a href="index.php">HOME</a></li>
                    <div class="form login-form">
                    <?php
                    if (isset($_SESSION['id'])) {
                        echo '<form action="Database/Classes/logout.scr.php" method="post">
                            <button class="btn btn-primary" type="submit" name="logout-submit">Logout</button>
                            </form>';
                    } else {
                        echo '<form action="Database/Classes/login.scr.php" method="post">
                        <input class="input login-input" type="text" name="mailuid" placeholder="Username/E-Mail">
                        <input class="input login-input" type="password" name="pwd" placeholder="Password">
                        <button class="btn btn-primary" type="submit" name="login-submit">Login</button>
                        <a class="btn btn-primary btn-register" href="signup.php">Signup</a>
                        </form>';
                    }
                    ?>
                    </div>
              </ul>
        </nav>
      <h1 class="title-name title-name-large">Lao Pins</h1>
    </header>