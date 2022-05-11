<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <title>TripRouteGuide</title>
</head>

<body>
    <header>
        <div id="header">
            <a id="logo" href="#" style="text-decoration:none">
                <img src="trip.png" width="100px" height="100px">
                <h2>TripRouteGuide</h2>
            </a>
            <?php
            if (isset($_SESSION['userid'])) {
                echo "<div id='member'>{$_SESSION['userid']}님 어서오세요<div>";
            ?>
                <div id="logout" onclick="logout()">로그아웃<div>
            <?php
            } else {
            ?>
                <a id="login" href="login.html" style="text-decoration:none">로그인</a>
            <?php    
            }  
            ?>
        </div>
        <script>
            function logout() {
                <?php
                session_start();
                session_destroy();
                ?>
                location.href = "index.php";
            }
        </script>
    </header>

    <nav>
        <div class="container">
            <div id="Guide" onclick="Guide()">
                <img src="Guide.jpg" alt="">
                <h1>가이드</h1>
            </div>
            <div id="Share" onclick="Share()">
                <img src="share.png" alt="">
                <h1>공유</h1>
            </div>
        </div>
        <script>
            function Guide() {
                <?php
                if (isset($_SESSION['userid'])) {
                ?>
                    location.href = "Guide.html";
                
                <?php
                } else {
                ?>
                    alert("로그인해주세요.");
                <?php
                }
                ?>
            }


            function Share() {
            <?php
            if (isset($_SESSION['userid'])) {
            ?>
                location.href = "share.php";
            <?php    
            } else {
            ?>
                alert("로그인해주세요.");
            <?php
            }
            ?>
            }
        </script>

    </nav>
</body>

</html>