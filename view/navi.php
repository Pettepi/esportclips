<?php
require_once ("config/config.php");
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eSportsclips.net</title>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar">
                <span class="glyphicon glyphicon-menu-right"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><img src="/navbarlogo.png">eSportsclips.net</a></li>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="userpage.php">Profile</a></li>
                <li><a href="#">Clips</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <?php

                if(!empty($_SESSION['Username'])){
                echo '
                <li><a href="logout.php"><button id="myBtnSequel"><span class="glyphicon glyphicon-log-out"></span> Logout</button></a></li>';}
                    else{
                    echo '
                    
                <li><a href="#"><button id="myBtn"><span class="glyphicon glyphicon-user"></span> Login / Register</button></a></li>
                <!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->';}
                ?>
                <li id="Welcomemsg">
                    <?php

                    $Tervetuloa = 'Tervetuloa';
                    if(!empty($_SESSION['Username'])){
                    $userUsername = $_SESSION['Username'];
                    echo "Welcome".'&nbsp'. $userUsername;}
                    //var_dump($_SESSION);

                    ?>

                </li>

            </ul>


        </div>
    </div>
</nav>