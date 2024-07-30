<?php 
    $conn = mysqli_connect('localhost','root','','prime_space');
?>

<?php
  if(isset($_GET['kode'])){
    mysqli_query($conn, "DELETE FROM pform where id='$_GET[kode]'");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>PRIME SPACE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="history.css" />
    <link rel="icon" sizes="32x32" href="./image/Portrait Default.png" />
    <!-- ICONS  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- HEADER NAVIGATION -->
    <header>
      <div class="headWrap">
        <img src="./image/Landscape Default .png" alt="logo" />
        <div class="linkNav">
          <a href="index.html">Dashboard</a>
          <a href="history.">History</a>
          <button class="btn" onclick="location.href='form.html'" type="borrow">
            Form Peminjaman
          </button>
        </div>
      </div>
    </header>

    <!-- HERO SECTION CONTAINER -->
    <section id="hero">
      <div class="heroWrap">
        <div class="heroBackground">
          <div class="wrap-element">
            <div class="hero-head">
              <i class="bx bx-history"></i>
              <div class="wrap">
                <h1>Riwayat Peminjamam Ruangan</h1>
                <p class="text-remind">
                  Berikut adalah riwayat peminjaman yang telah dilakukan.
                </p>
              </div>
            </div>
            <hr />
            <!-- FORM INPUT - SELECT CONTAINER -->
            <!-- <div class="form-container">
              <div class="input-field">
                <label for="ruangDipinjam">Pilih Ruangan :</label>
                <select id="ruangDipinjam" name="ruangDipinjam" required>
                  <option value="" selected disabled>Pilih Ruangan</option>
                  <option value="Ruang Hima">Lapangan Kampus</option>
                  <option value="Lab. RPL">Lab. RPL</option>
                  <option value="Lab. Data">Lab. Data</option>
                  <option value="Ruang Kreatif">Ruang Kreatif</option>
                  <option value="Studio Musik">Ruang Studio</option>
                  <option value="Ruang Auditorium">Ruang Auditorium</option>
                  <option value="Ruang Meeting Lt.1">Ruang Meeting Lt.1</option>
                  <option value="Ruang Meeting Lt.2">Ruang Meeting Lt.2</option>
                  <option value="Kelas R.01">Kelas R.01</option>
                  <option value="Kelas R.02">Kelas R.02</option>
                  <option value="Kelas R.03">Kelas R.03</option>
                  <option value="Kelas R.04">Kelas R.04</option>
                  <option value="Kelas R.05">Kelas R.05</option>
                  <option value="Kelas R.06">Kelas R.06</option>
                  <option value="XD Stage">XD Stage</option>
                  <option value="Aula">Aula Lt.4</option>
                  <option value="XD Space">XD Space</option>
                  <option value="Ruang Hima">Ruang Hima</option>
                </select>
              </div>
              <div class="input-field">
                <label for="mulaiTanggal">Hari / Tanggal :</label>
                <input
                  type="date"
                  id="mulaiTanggal"
                  name="mulaiTanggal"
                  required
                />
              </div>
              <div class="btn-wrap">
                <button type="button" id="searchButton">Search</button>
              </div>
            </div> -->
          </div>
        </div>
        <!-- BOX HISTORY -->
        <div class="scrollable-content">
          <?php
            $data = mysqli_query($conn,"SELECT * FROM pform");
            while($hasil = mysqli_fetch_array($data)){
            ?>
            <div class="boxes">
              <div class="boxes-wrap">
                <div class="text">
                  <h3><?php echo $hasil['RUANG']?></h3>
                  <p><?php echo $hasil['PJ']?></p>
                </div>
                <p class="date"><?php echo $hasil['TGLMULAI']?></p>
                <p class="time"><?php echo $hasil['JAMMULAI']?></p>
                <!-- EDIT BUTTON -->
                <div class="b1-element">
                  <a type="button" id="editButton" href="pass_check.php?id=<?php echo $hasil['id']?>">Edit</a>
                  <a type="button" id="deleteButton" href="pass_check.php?id=<?php echo $hasil['id']?>">Delete</a>
                </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer>
      <div class="footer-con">
        <div class="footer">
          <h5>PRIVACY POLICY . FAQ</h5>
          <p>PRIME SPACE &copy; 2023 Made by Group 3</p>
        </div>
      </div>
    </footer>
  </body>
</html>
