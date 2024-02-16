<?php
require 'config/database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AND MYSQL ADMIN PANNEL</title>
    <!-- CUSTOM STYLESHEET-->
    <link rel="stylesheet" href="<?= ROOT_URL?>css/style.css">
    <!-- ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font(montse) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700;800;900&family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="<?= ROOT_URL?>" class="nav__logo">e-ration</a>
            <ul class="nav__items">
              <li><a href="<?= ROOT_URL?>blog.php">HOME</a></li>
              <li><a href="<?= ROOT_URL?>about.php">ABOUT</a></li>
              <li><a href="<?= ROOT_URL?>services.php">SERVICE</a></li>
              <li><a href="<?= ROOT_URL?>contact.php">CONTACT</a></li>
              <!-- <li><a href="<?= ROOT_URL?>signin.php">SIGN-IN</a></li> -->
              <li class="nav__profile">
                  <div class="avatar">
                      <img src="./images/avatar1.jpg" >
                  </div>
                  <ul>
                      <li><a href="<?= ROOT_URL?>admin/index.php">Dashboard</a></li>
                      <li><a href="<?= ROOT_URL?>logout.php">log out</a></li>
                  </ul>
              </li>
            </ul>       
            <button id="open__nav__button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="menu"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></button>
            <button id="close__nav__button"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>
<!--------------------------------END OF NAVBAR  ------------------------------------------------>
