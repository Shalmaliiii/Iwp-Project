<?php 
session_start();
require 'db_connection.php';
require 'insert_user.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: Login/home.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up - Footmarkz.com</title>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> 
        <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="../assets/css/styles.css">
<link rel="stylesheet" href="style.css" media="all" type="text/css">
</head>
<body style="background-color:rgb(35,35,42 ); color:white" >
<?php
        include('../private/navbar.php');
        include('../private/effects_rest.php');

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
<form action="" method="post" style="border:none ; margin-top:3%">
<div style="background-color:rgb(43,43,51)">
    <h2  style="background-color:rgb(43,43,51) ; margin:0px ; padding:3% ">Create an account</h2>
</div>

<div class="container" style="background-color:rgb(43,43,51)">
<label for="username"><b>Username</b></label>
<input type="text" placeholder="Enter username" id="username" name="username" required>

<label for="email"><b>Email</b></label>
<input type="email" placeholder="Enter email" id="email" name="user_email" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="user_password" required>

<button type="submit">Sign Up</button>
</div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
    echo '<div class="error_message">'.$error_message.'</div>'; 
    }
    ?>
    <div class="container" style="background-color:rgb(43,43,51)">
    <a href="../test_login.php"><button type="button" class="Regbtn">Login</button></a>
    </div>
    </form>
    </div>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
    </html>
    

    