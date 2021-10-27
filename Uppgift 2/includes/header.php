<?php
session_start();
error_reporting(-1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>The Internet Dog Database (IDDb)</title>
</head>
<body>
    <div class="content">
        <div class="header">
            <img src="assets/images/header.jpg" alt="HappyDog" class="happydog">
            <h1 class="headerH1">The Internet Dog Database</h1>
            <?php
        //-- SKRIVER UT OLIKA NAVIGATIONER OM PERSONEN ÄR INLOGGAD ELLER INTE --
            if (isset($_SESSION["isSignedIn"])) {
                echo "<nav class='nav'>";
                echo "<a href='index.php' class='navElement'>Home</a>";
                echo "<a href='list.php' class='navElement'>Dogs</a>";
                echo "<a href='add.php' class='navElement'>Add</a>";
                echo "<a href='profile.php' class='navElement'>Profile</a>";
                echo "<a href='sign-out.php' class='navElement'>Sign out</a>";
                echo "</nav>";
            } else {
                echo "<nav class='nav'>";
                echo "<a href='index.php' class='navElement'>Home</a>";
                echo "<a href='list.php' class='navElement'>Dogs</a>";
                echo "<a href='sign-in.php' class='navElement'>Sign in</a>";
                echo "</nav>";
            }
            ?>
        </div>