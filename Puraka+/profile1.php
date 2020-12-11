<?php 
session_start();
include 'conf/connection.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cerita</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../NAVBAR/navbar.css">
    <!-- ini sepaket isinya untuk icon sm font nunito nya -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/styleprofile1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="grid-container">
 <div class="side-profile">
	<img src="profilepic.png" class="profilepic">
	<p class="name">Jennifer Lee</p>
	
	<a href="file:///D:/profile%20puraka/profile.html" >Akun</a>
	<a href="file:///D:/profile%20puraka/profile/itinerary.html" >Rencana Perjalanan</a>
	 <button class="dropdown-btn">Cerita
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="file:///D:/profile%20puraka/profile/Cerita.html?town=&kategori=&content=#contact">Buat Cerita</a>
    <a href="#">History Cerita</a>
  </div>
	<a href="/logout/" class="foot">Logout</a>
</div>
	</div> 
	 <div class="navbar">
        <a href="#" class="logo">Puraka</a>
        <div class="nav">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Jelajah</a></li>
            <li><a href="#">About</a></li>
          </ul>
        </div>
        <div class="nav-kanan">
          <ul>
            <li><i class="fa fa-search"></i><input type="text" name="search" placeholder="Search..." class="header1"></li>
            <li><a href="#"><i class="fa fa-user-o" style="font: size 15px; margin: 4px;"></i>Log In</a></li>
          </ul>
        </div>  
    <!-- <div class="header">
        <img src="../assets/image/jheader.jpg" alt="jelajah">
        <div class="text"><p>Jelajah</p></div>
    </div> -->
</div>
	<div class="main">

	<h1>Ceritain dong, pengalaman perjalananmu.</h1>
	<div class="card">
		<table>
	<form >
		<tr>
			<td>
				<label for="title"> Judul </label>
				<input type="text" id="title" class="form-styling">
				</td>
			</tr>
			<tr>
				<td>
					<label for="town"> Username </label>
					<select name="town" class="form-styling">
						<option></option>
						<option>Bandung</option>
						<option>Jakarta</option>
						<option>Yogyakarta</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label for="kategori"> Kategori </label>
					<select name="kategori" class="form-styling ">
						<option></option>
						<option>.....</option>
						<option>.......</option>
						<option>..........</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
				<label for="content"> Konten </label>	
				<textarea name="content" class="form-styling kat"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" class="btn1">Simpan</button> 
				</td>
			</tr>
	</form>
</table>
	</div>
</div>
<script type="text/javascript">
	var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
</html>
