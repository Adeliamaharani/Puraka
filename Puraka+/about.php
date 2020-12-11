<?php 
session_start();
include 'conf/connection.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>PURAKA</title>
  <link rel="stylesheet" href="http://127.0.0.1:5500/assets/css/styleabout.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body>
<div class="container">
  <div class="navbar">
  <a href="index.html" class="logo">Puraka</a>
  <div class="nav">
    <ul>
      <li><a href="index.html"  style="margin-left: 150px;">Home</a></li>
      <li><a href="jelajah.html">Jelajah</a></li>
      <li><a href="cerita.html">Cerita</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
  </div>
  <div class="nav-kanan">
    <ul>
      <li><i class="fa fa-search"></i><input type="text" name="search" placeholder="Search.."></li>
      <li><a href="login.html"><button class="button button1" style="margin-right: 80px; margin-left: 15px;">Log In</button></a></li>
      <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i></li>
      </a>
    </ul>
  </div>  
</div>
<div class="row">
  <div class="col">
    <h2>About PURAKA</h2>
    <p>PURAKA merupakan sebuah platform untuk mencari referensi destinasi wisata yang ada di 8 kota di Indonesia. Dengan menggunakan PURAKA, pengguna bisa mencari referensi untuk menentukan rencana perjalanan mereka. Pengguna juga bisa membuat jadwal perjalanan yang mereka inginkan. Selain itu, pengguna juga dapat menuliskan cerita-cerita perjalanan mereka agar dapat dijadikan referensi untuk orang lain.</p> 
    <br><br><p style="text-align: center; font-size: 18px; font-weight: bold;">Website ini dikembangkan oleh:</p><br>
    <div class="nama">
    <div class="adel"><img src="../assets/image/adel.jpg" alt="">
    <p>Adelia Maharani</p>
    </div>
  <div class="nabila">
    <img src="../assets/image/nabila.jpg" alt="">
    <p>Nabilla R</p></div>
    <div class="fira">
      <img src="../assets/image/fira.jpg" alt="">
      <p>Aulia Safira Ahda</p>
    </div>
  </div>
  </div>
</div>
</div>
</body>
</html>