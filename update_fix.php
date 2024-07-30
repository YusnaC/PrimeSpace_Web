<?php
    
    $conn = mysqli_connect('localhost','root','','prime_space');

        $ID = $_POST['id'];
        $penanggungjawab = $_POST['penanggungJawab'];
        $nimNik = $_POST['nimNik'];
        $nomorTelepon = $_POST['nomorTelepon'];
        $mulaiTanggal = $_POST['mulaiTanggal'];
        $jamMulai = $_POST['jamMulai'];
        $ruangDipinjam = $_POST['ruangDipinjam'];
        $sampaiTanggal = $_POST['sampaiTanggal'];
        $jamSelesai = $_POST['jamSelesai'];
        $keperluanPeminjaman = $_POST['keperluanPeminjaman'];

        $sql = "UPDATE pform set PJ='$penanggungjawab', NIMNIK='$nimNik', TELP='$nomorTelepon', TGLMULAI='$mulaiTanggal', JAMMULAI='$jamMulai', RUANG='$ruangDipinjam', TGLSELESAI='$sampaiTanggal', JAMSELESAI='$jamSelesai', KEPERLUAN='$keperluanPeminjaman' where id='$ID'";

        $sql1=mysqli_query($conn, $sql);

        if($sql1){
            header("location: history.php");
        }else{
            echo "fail";
        }
    
?>