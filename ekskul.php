<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ekstrakurikuler SMK Artanita</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="jpeg" href="logo.png" />
  </head>
  <body>
    <header>
    <div class="navbar">
      <div class="navbar-left">
        <img src="logo.png" alt="Logo SMK Artanita" />
        <h1>
          EKSTRAKULIKULER<br />
          <span>SMK ARTANITA</span>
        </h1>
      </div>
      <div class="navbar-center">
        <a href="home.html">HOME</a>
        <a href="berita.html">BERITA</a>
        <a href="#">KONTAK</a>
          <nav>
          <a href="#" class="btn-hubungi">LOGIN</a>
         </header>
      </nav>
      </div>
    </div>
     </div>
     </body>
     </html>