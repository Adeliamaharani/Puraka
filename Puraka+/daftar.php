<?php 

	session_start();
	include 'conf/connection.php';
	if (!empty($_SESSION['username'])){
		header('location: index.php');
}
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>PURAKA</title>
  <link rel="stylesheet" href="assets/css/styleform.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
<div class="container">
  <div class="navbar">
  <a href="#" class="logo">Puraka</a>
  <div class="nav">
    <ul>
      <li><a href="index.php"  style="margin-left: 150px;">Home</a></li>
      <li><a href="jelajah.php">Jelajah</a></li>
      <li><a href="cerita.php">Cerita</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
  </div>
  <div class="nav-kanan">
    <ul>
      <li><i class="fa fa-search"></i><input id="search"type="text" name="search" placeholder="Search.."></li>
      <li><a href=""><button class="button button1" style="margin-right: 80px; margin-left: 15px;">Log In</button></a></li>
      <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i></li>
      </a>
    </ul>
  </div>  
</div>
<div class="row">
  <div class="col">
    <h1>Let's Adventure with PURAKA!</h1>
  </div>

<!-- <div class="col"> -->
<form action="" method="post">
<div class="isian">
  <h2>Puraka</h2>
  		<?php
		if (isset($_POST['daftar'])){
			$q = $koneksi->query("SELECT * FROM user where username='".$_POST['username']."' or email='".$_POST['email']."'");
			if ($q->num_rows > 0){
				echo "<script>
					alert 'username atau email telah digunakan' </script>";
			}else{
				if($koneksi->query("INSERT INTO user (username, email, password) values ('".$_POST['username']."', '".$_POST['email']."', '".$_POST['password']."')")){
					echo "<script>
						alert 'akun berhasil didaftarkan'</script>";
					header('refresh: 2;url=login.php');
				} //perlu enkripsi
			}
		}
		?>
  <p>Silahkan Daftarkan dirimu menjadi pengguna PURAKA</p>
  <label for="uname"><b>Email</b></label>
    <input id="input" type="email" placeholder="Enter your Email" name="email" required>
	<br>
    <label for="uname"><b>Nama Lengkap</b></label>
    <input id="input" type="text" placeholder="Enter your Name" name="namalengkap" required>
	<br>
	<label for="nlengkap"><b>Username</b></label>
    <input id="input" type="text" placeholder="Enter Username" name="username" required>
	<br>
    <label for="psw" ><b>Password</b></label>
    <input id="input" type="password" placeholder="Enter Password" name="password" required>
	<br>
	  <label for="psw" ><b>Konfirmasi Password</b></label>
    <input id="input" type="password" placeholder="Repeat your Password" name="password2" required>
	<br><br>
    <button class="button button2" type="submit">Daftar</button>
  <br><br>
  <p style="text-align: center; margin: 0;">Sudah punya akun? Klik <a href="login.html">disini</a></p>
  </div>
<!-- </div> -->
</div>
</div>
</form>
</body>
</html>