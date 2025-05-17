<!-- Tambahin ini di bagian <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 
<style>
  .navbar{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background-color: white;
    border-bottom: 1px solid #ddd;
    position: relative;
  }
  
  .navbar-left {
    display: flex;
    align-items: center;
  }
  .navbar-center {
    position: absolute;
    left: 50%;
    transform: translate(-50%);
    display: flex;
    gap: 20px;
  }
  .navbar-center a {
    text-decoration: none;
    color: #4CAF50;
    font-weight: bold;
  }
  .navbar-center a:hover{
    color: #2a652c; /* Hijau lebih gelap */
  }
  
  
  .navbar-left img {
    height: 60px;
    margin-right: 15px;
  }
  .navbar-right a {
  margin-left: 20px;
  text-decoration: none;
  color: rgb(42, 42, 42);
  font-weight: bold;
}
  header {
      background: white;
      border-bottom: 1px solid #ddd;
      position: fixed;      /* Bikin nempel di layar */
      top: 0;               /* Nempel ke atas */
      width: 100%;          /* Biar selebar layar */
      z-index: 1000;        /* Biar nggak ketiban elemen lain */
    }
    .navbar-text {
      display: flex;
      flex-direction: column;
      justify-content: center;
      line-height: 1.2;
    }
    
    .title-ekskul,
    .subtitle-ekskul {
      margin: 0;         /* Hapus jarak luar bawaan */
      padding: 0;        /* Hapus jarak dalam jika ada */
      line-height: 1.2;  /* Rapatkan jarak antar baris */
    }
    
    
    
    .title-ekskul {
  margin: 0;
  font-size: 20px;
  color: #111;
}

.subtitle-ekskul {
  display: block;
  margin: 0;
  font-size: 16px;
  color: #333;
  font-weight: normal;
}
/*end navbar*/
  </style>
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
        </div>
      </div>
    </header>
    

<div class="container mt-5">
  <h2 class="mb-4">Form Pendaftaran Ekskul</h2>
  <form action="backend/daftar.php" method="POST" class="card p-4 shadow-sm">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
      <label for="nis" class="form-label">NIS</label>
      <input type="text" class="form-control" id="nis" name="nis" required>
    </div>
    <div class="mb-3">
      <label for="ekskul" class="form-label">Pilih Ekskul</label>
      <select class="form-select" id="ekskul" name="ekskul" required>
        <option value="">-- Pilih Ekskul --</option>
        <option value="Basket">Basket</option>
        <option value="Pramuka">Pramuka</option>
        <option value="Futsal">Futsal</option>
        <option value="Paduan Suara">Paduan Suara</option>
        <option value="Badminton">Badminton</option>
        <option value="Rohis">Rohis</option>
        <option value="Pencak Silat">Pencak Silat</option>
        <option value="Paskibra">Paskibra</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Daftar</button>
  </form>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>