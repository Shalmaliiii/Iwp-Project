<?php
session_start();
require 'Login/db_connection.php';
require 'Login/login.php';
// IF USER LOGGED IN
if (isset($_SESSION['user_email'])) {
    header('Location: Login/home.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="Login/style1.css">

    <title>Medweb</title>
</head>

<body>
    <?php
    include('private/navbar.php');
    include('private/effects_rest.php');

    // after moving ./private/ directory to ../../private/ do these:
    // include('../../private/navbar.php');
    // include('../../private/effects.php');
    ?>

    <!--==================== MAIN CONTENT HERE ====================-->
    <div class="container">
        hello world
        <br><br>
        <br><br>

    </div>
    <div class="outer">
        <form action="" method="post">
            <h2 style="padding:5%">User Login</h2>

            <div class="container" style="padding:5%">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter email" id="email" name="user_email" autocomplete="off" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter password" id="password" name="user_password" autocomplete="off" required>

                <button type="submit">Login</button>
            </div>
            <?php
            if (isset($success_message)) {
                echo '<div class="success_message">' . $success_message . '</div>';
            }
            if (isset($error_message)) {
                echo '<div class="error_message">' . $error_message . '</div>';
            }
            ?>
            <div class="container3" style="background-color:rgb(43,43,51 ); padding-left:4%">
                <a href="Login/signup.php">
                    <button type="button" class="Regbtn">Create an account</button></a>
            </div>
        </form>
    </div>


    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>