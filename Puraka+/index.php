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
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
<div class="container">
  <div class="navbar">
  <a href="#" class="logo">Puraka</a>
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
    <p>⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯ PURAKA</p>
    <h1>The New Way to Discover!</h1>
    <p>Let's Discover the best destination in Indonesia with PURAKA</p> 
    <!-- <p> Puraka Hadir dimana-mana menemanimu bepergian!</p> -->
    <a href="jelajah.html"><button class="button button2">Explore!</button></a>
  </div>
</div>
</div>
<div class="isi">
<div class="jelajah">
  <div class="tulisan">
    <h2>Jelajah</h2>
    <p>Butuh referensi untuk rencana perjalananmu? Jelajahi kota-kota indah di Indonesia dengan ragam wisata dan budayanya!</p>
    <a href="jelajah.html">Lebih Lengkap ></a>
  </div>
  <div class="kotak">
  <img src="https://images.unsplash.com/photo-1542897644-e04428948020?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" alt="Avatar" class="image">
  <div class="middle">
    <div class="text">
      <h2>Bali</h2>
    <p>Bali adalah sebuah pulau di Indonesia yang dikenal karena memiliki pegunungan berapi yang hijau, terasering sawah...</p>
  </div>
  <a href="bali.html">Jelajahi Sekarang!</a>
</div>
</div>
<div class="kotak">
  <img src="https://i.pinimg.com/564x/2a/cd/47/2acd478e56be7b47ce1e88256151d83b.jpg" alt="Avatar" class="image">
  <div class="middle">
    <div class="text">
      <h2>Bandung</h2>
      <p>Kota Bandung adalah kota metropolitan terbesar di Provinsi Jawa Barat, sekaligus menjadi ibu kota provinsi tersebut.      </p>
    </div>
    <a href="bandung.html">Jelajahi Sekarang!</a>
  </div>
</div>
<div class="kotak">
  <img src="https://i.pinimg.com/564x/a3/d0/de/a3d0def46e44879c44456d2d29881563.jpg" alt="Avatar" class="image">
  <div class="middle">
    <div class="text">
      <h2>Lombok</h2>
      <p>Pulau Lombok adalah sebuah pulau di kepulauan Sunda Kecil atau Nusa Tenggara yang terpisahkan...</p>
    </div>
    <a href="lombok.html">Jelajahi Sekarang!</a>
  </div>
</div>
</div>
<div class="cerita">
  <!-- <div class="kotak">
    <img src="https://images.unsplash.com/photo-1605365732480-2eaee73ac553?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" alt="Avatar" class="image">
    <div class="middle">
      <div class="text">Hello World</div>
    </div>
  </div> -->
  <div class="kotak">
    <img src="https://images.unsplash.com/photo-1605734168002-ecf8b718491b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" alt="Avatar" class="image">
  </div>
  <div class="kotak">
    <img src="https://images.unsplash.com/photo-1519055548599-6d4d129508c4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" alt="Avatar" class="image">
  </div>
  <div class="tulisan">
    <h2>Cerita</h2>
    <p>Kamu dapat melihat berbagai cerita pengalaman pengguna puraka serta dapat membuat ceritamu sendiri!</p>
    <a href="login.html">Daftarkan Segera!</a>
  </div>
</div>
<div class="jelajah">
  <div class="tulisan">
    <h2>Rencana Perjalanan</h2>
    <p>Rencanakan perjalananmu dengan menjadi penggua PURAKA</p>
    <a href="">Coming Soon!</a>
  </div>
<div class="kotak">
  <img src="https://images.unsplash.com/photo-1524850011238-e3d235c7d4c9?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1087&q=80" alt="Avatar" class="image">
</div>
<div class="kotak">
  <img src="https://images.unsplash.com/photo-1529651737248-dad5e287768e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=2602&q=80" alt="Avatar" class="image">
</div>
<div class="kotak">
  <img src="https://images.unsplash.com/photo-1502301197179-65228ab57f78?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=932&q=80" alt="Avatar" class="image">
</div>
</div>
</div>




<div class="footer">
  <p>Copyright© PURAKA made with <3</p>
</div>
</body>
</html>

