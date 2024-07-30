<?php
    $conn = mysqli_connect('localhost','root','','prime_space');
    $ID=$_GET['id'];
    $data = mysqli_query($conn, "SELECT * from pform where id=$ID");
    $sql = mysqli_fetch_array($data);
    
?>


<!DOCTYPE html>
<html>
  <head>
    <title>PRIME SPACE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="update.css" />
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
          <a href="history.php">History</a>
          <button class="btn" onclick="location.href='form.html'" type="borrow">
            Form Peminjaman
          </button>
        </div>
      </div>
    </header>

    <!-- HERO SECTION CONTAINER -->
    <section id="hero">
      <div class="heroWrap">
        <div class="hero-head">
          <i class="bx bxs-info-circle"></i>
          <div class="wrap">
            <h1>Update Peminjaman Ruangan</h1>
            <p class="text-remind">
              Tolong cek kembali data yang diperbarui, pastikan sesuai
              ketentuan.
            </p>
          </div>
        </div>
      </div>
      <hr />
      <!-- FORM WRAPPER -->
      <section id="form">
        <form method="post" action="update_fix.php">
          <input type="hidden" name="id" value="<?php echo $sql['id'] ?>">
          <div class="fields">
            <div class="input-field">
              <label for="penanggungJawab">Penanggung Jawab :</label>
              <input
                type="text"
                id="penanggungJawab"
                name="penanggungJawab"
                required
                value="<?php echo $sql['PJ']?>"
              />
            </div>
            <div class="input-field">
              <label for="nimNik">NIM / NIK :</label>
              <input
                type="text"
                id="nimNik"
                name="nimNik"
                required
                value="<?php echo $sql['NIMNIK']?>"
              />
            </div>
            <div class="input-field">
              <label for="nomorTelepon">Nomor Telepon :</label>
              <input
                type="tel"
                id="nomorTelepon"
                name="nomorTelepon"
                required
                value="<?php echo $sql['TELP']?>"
              />
            </div>
            <div class="input-field">
              <label for="mulaiTanggal">Mulai Tanggal :</label>
              <input
                type="date"
                id="mulaiTanggal"
                name="mulaiTanggal"
                required
                value="<?php echo $sql['TGLMULAI']?>"
              />
            </div>
            <div class="input-field">
              <label for="jamMulai">Jam Mulai :</label>
              <input type="time" id="jamMulai" name="jamMulai" required 
              value="<?php echo $sql['JAMMULAI']?>"
              />
            </div>
            <div class="input-field">
              <label for="ruangDipinjam">Ruang Dipinjam :</label>
              <select id="ruangDipinjam" name="ruangDipinjam" required>
                <option value="" selected disabled>Pilih Ruangan</option>
                <option value="Lab. RPL">Lab. RPL</option>
                <option value="Lab. Data">Lab. Data</option>
                <option value="Ruang Kreatif">Ruang Kreatif</option>
                <option value="Ruang Meeting Lt.1">Ruang Meeting Lt.1</option>
                <option value="Studio Musik">Studio Musik</option>
                <option value="Studio Dance">Studio Dance</option>
                <option value="Ruang Auditorium">Ruang Auditorium</option>
                <option value="Ruang Meeting Lt.2">Ruang Meeting Lt.2</option>
                <option value="XD Stage">XD Stage</option>
                <option value="Kelas R.01">Kelas R.01</option>
                <option value="Kelas R.02">Kelas R.02</option>
                <option value="Kelas R.03">Kelas R.03</option>
                <option value="Kelas R.04">Kelas R.04</option>
                <option value="Kelas R.05">Kelas R.05</option>
                <option value="Kelas R.06">Kelas R.06</option>
                <option value="Aula">Aula Lt.4</option>
                <option value="XD Space">XD Space</option>
                <option value="Ruang Hima">Ruang Hima</option>
              </select>
            </div>
            <div class="input-field">
              <label for="sampaiTanggal">Sampai Tanggal :</label>
              <input
                type="date"
                id="sampaiTanggal"
                name="sampaiTanggal"
                required
                value="<?php echo $sql['TGLSELESAI']?>"
              />
            </div>
            <div class="input-field">
              <label for="jamSelesai">Jam Selesai :</label>
              <input type="time" id="jamSelesai" name="jamSelesai" required value="<?php echo $sql['JAMSELESAI']?>"/>
            </div>
            <div class="input-field full-width">
              <label for="keperluanPeminjaman">Keperluan Peminjaman :</label>
              <input
                id="keperluanPeminjaman"
                name="keperluanPeminjaman"
                rows="4"
                required
                value="<?php echo $sql['KEPERLUAN']?>"
              ></input>
            </div>
          </div>
          <!-- Button Update & Cancel -->
          <div class="button-container">
            <input type="submit" class="update-btn" value="Update">
          </div>
          <!-- Popup Message Successful -->
          <!-- <div id="successPopup" class="popup">
            <div class="popup-content-success">
              <span class="close" id="closeSuccessBtn">&times;</span>
              <i class="bx bxs-check-circle"></i>
              <h3>Sukses!</h3>
              <p>Data Anda berhasil diupdate.</p>
            </div>
          </div> -->
        </form>
      </section>
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

<!-- <script>
    function updateData() {
      // Cek apakah semua field yang wajib diisi telah diisi
      if (isValidForm()) {
        // Jika valid, lakukan pembaruan data yang sudah ada
        // ...

        // Tampilkan popup sukses
        const successPopup = document.getElementById("successPopup");
        successPopup.style.display = "block";

        // Atur durasi tampilan pop-up (misalnya 5 detik)
        const displayDuration = 5000; // dalam milidetik (ms)
        setTimeout(function () {
          successPopup.style.display = "none";
        }, displayDuration);
      } else {
        // Jika tidak valid, tampilkan pesan kesalahan atau ambil tindakan lain
        console.log("Mohon lengkapi semua field yang wajib diisi.");
      }
      setTimeout(redirect, 5000); // sesuaiin juga intervalnya; 1 detik ditulis 1000
    }
    // Fungsi untuk memeriksa apakah semua field yang wajib diisi telah diisi
    function isValidForm() {
      const requiredFields = document.querySelectorAll("[required]");
      for (const field of requiredFields) {
        // Anda dapat menyesuaikan validasi sesuai kebutuhan, misalnya
        // memeriksa apakah nilai trim() tidak kosong untuk input teks
        if (
          field.type === "text" ||
          field.type === "password" ||
          field.tagName === "TEXTAREA"
        ) {
          if (field.value.trim() === "") {
            return false; // Jika ada field yang kosong, kembalikan false
          }
        } else if (field.type === "select-one" && field.value === "") {
          return false; // Jika dropdown belum dipilih, kembalikan false
        }
        // Tambahkan validasi lain sesuai kebutuhan
      }
      return true; // Jika semua field wajib diisi terisi, kembalikan true
    }
    function redirect() {
      document.location.href = 'index.html' // sesuaiin ke halaman dashboard
     }
</script> -->

  </body>
</html>
