<?php
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ade Web</title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div class="bgimage">

      <div class="menu">
        <div class="leftmenu">
          <h2 class="font">Website, <?php echo $_SESSION['username'];?> (<?php echo $_SESSION['role'];?>) </h2>
        </div>

        <div class="rightmenu">
        <ul>
          <li> <a href="#">Home</a></li>
          <li> <a href="#">Services</a></li>
          <li> <a href="#">About</a></li>
          <li> <a href="#">Blog</a></li>
          <li> <a href="#">Contact</a></li>
          <li><a class="logout" href="logout.php">Log Out</a></li>

        </ul>
      </div>
      </div>

      <div class="text">
          <h1>Selamat Datang</h1>
          <a href="#" id="buttonone">Pesan Tiket</a>
          <a href="#"id="buttontwo">Pesan Hotel</a>
      </div>

    </div>

  </body>
</html>
