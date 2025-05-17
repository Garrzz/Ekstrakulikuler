<?php
include 'config.php';

$result =mysqli_query($conn, "SELECT * FROM artikel ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ekstrakurikuler SMK Artanita</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="jpeg" href="image/logo.png" />
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
          <a href="kontak.html">KONTAK</a>
          <a href="pendaftaran.php">DAFTAR</a>
        </div>
      </div>
    </header>
      </div>
    </div>
     </div>
     </div>
     <a href="Log.php"   button class="btn-login">Login</button></a>
    
    <h1>Artikel Berita Sekolah</h1>
    <div class="artikel-container">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="artikel">
                <h2><?= htmlspecialchars($row['judul']) ?></h2>
                <p><?= nl2br(htmlspecialchars($row['isi'])) ?></p>
                <small><i><?= $row['tanggal'] ?></i></small>
            </div>
        <?php endwhile; ?>
    </div>
    
</body>
</html>