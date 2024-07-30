<?php
    $conn = mysqli_connect('localhost','root','','prime_space');

    $penanggungjawab = $_POST["penanggungJawab"];
    $nimNik = $_POST["nimNik"];
    $nomorTelepon = $_POST["nomorTelepon"];
    $mulaiTanggal = $_POST["mulaiTanggal"];
    $jamMulai = $_POST["jamMulai"];
    $ruangDipinjam = $_POST["ruangDipinjam"];
    $sampaiTanggal = $_POST["sampaiTanggal"];
    $jamSelesai = $_POST["jamSelesai"];
    $keperluanPeminjaman = $_POST["keperluanPeminjaman"];
    $password = $_POST["password"];
    
    $query = "SELECT * FROM pform";
    $sql = "INSERT INTO pform(PJ,NIMNIK,TELP,TGLMULAI,JAMMULAI,RUANG,TGLSELESAI,JAMSELESAI,KEPERLUAN,PASS) VALUES('$penanggungjawab', '$nimNik', '$nomorTelepon', '$mulaiTanggal', '$jamMulai', '$ruangDipinjam', '$sampaiTanggal', '$jamSelesai', '$keperluanPeminjaman', '$password')";
    mysqli_query($conn, $sql);
    header("location: index.html");
    exit();
?>