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
    <link rel="stylesheet" href="" />
    <link rel="icon" type="jpeg" href="logo.png" />
  </head>
  <body>
  <header>
      <div class="navbar">
        <div class="navbar-left" data-aos="fade-right"data-aos-duration="1200">
          <img src="image/logo.png" alt="Logo SMK Artanita" />
          <div class="navbar-text">
            <h1 class="title-ekskul">EKSTRAKULIKULER</h1>
            <p class="subtitle-ekskul">SMK ARTANITA</p>
          </div>
        </div>
        <div class="navbar-center"data-aos="fade-down"data-aos-duration="1200">
          <a href="home.html">HOME</a>
          <a href="ekskul.html">EKSKUL</a>
          <a href="artikel.php">BERITA</a>
          <a href="kontak.html">KONTAK</a>
          <a href="pendaftaran.php">DAFTAR</a>
        </div>
      </div>
    </header>
      </nav>
      </div>
    </div>
     </div>
     </body>
     </html>