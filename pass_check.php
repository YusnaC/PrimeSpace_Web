<?php
    
    $conn = mysqli_connect('localhost','root','','prime_space');
    

    if(isset($_POST["submit"])){
      $password = $_POST["password"];
      $ID = $_POST['id'];
      $sql = mysqli_query($conn, "SELECT * from pform where id=$ID");
      //cek password
      if(mysqli_num_rows($sql) === 1){
        $row = mysqli_fetch_assoc($sql);
        if($password==$row['PASS']){
          header("location: update.php?id=$ID");
          exit();
        } 
      }
      $error = true;
    }

    if(isset($_POST["delete"])){
      $password_del = $_POST["password"];
      $ID_del = $_POST['id'];
      $sql_del = mysqli_query($conn, "SELECT * from pform where id=$ID_del");
      $row_del = mysqli_fetch_assoc($sql_del);
      if($password_del==$row_del['PASS']){
        $sql1 = mysqli_query($conn, "DELETE from pform where id=$ID_del");
      header("location: history.php");
      exit();
      }
      $error = true;
    };
?>

<!DOCTYPE html>
<html>
  <head>
    <title>PRIME SPACE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="pass_check.css" />
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
    <div class="wrap-modal">
      <div id="myModal" class="modal">
        <form action="" method="post">
          <div class="modal-content">
            <a class="close" href="history.php">&times;</a>
            <h3>Password Confirmation</h3>
            <p>Anda perlu memasukkan kata sandi untuk mengubah data.</p>
            <div class="input-field-password-uniq">
              <input
                type="password"
                id="passwordInput"
                name="password"
                required
                placeholder="Masukkan Password"
              />
              <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
            </div>
            <?php
              if(isset($error)) :?>
                <p style="color: red; font-style: italic">password salah</p>
            <?php endif; ?>
            <button type="submit" class="custom-button" name="submit">
              Edit
            </button>
            <button type="submit" class="custom-button" name="delete">
              Delete
            </button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>