<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: logout.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> 
        <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="../assets/css/styles.css">
<link rel="stylesheet" href="style.css" media="all" type="text/css">
<title>Home</title>
<style>
a, a:visited{
color: #0000EE;
}
a:hover{
color: white;
}

body{
    background-color: rgb(43,43,51);
    color:white
}
</style>
</head>

<body>
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
<div class="container">
<h1>Hello, <?php echo $userData['username'];?></h1>

<a href="logout.php">Logout</a>
</div>
<div class="container">
            <br><br>
            <br><br>

        </div>
<?php
        // include('private/footer.php');
?>
</body>
</html>