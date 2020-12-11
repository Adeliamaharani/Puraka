<?php 
session_start();
include 'conf/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylejelajah.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- <div class="container"> -->
        <div class="navbar">
            <a href="#" class="logo">Puraka</a>
            <div class="nav">
              <ul>
                <li><a href="index.php" style="margin-left: 70px;">Home</a></li>
                <li><a href="jelajah.php">Jelajah</a></li>
                <li><a href="cerita.php">Cerita</a></li>
                <li><a href="about.php">About</a></li>
              </ul>
            </div>
            <div class="nav-kanan">
              <ul>
                <li><i class="fa fa-search"></i><input type="text" name="search" placeholder="Search.."></li>
                <li><a href="login.php"><button class="button button1" style="margin-right: 80px; margin-left: 15px;">Log In</button></a></li>
                <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i></li>
                </a>
              </ul>
            </div>  
          </div>
        <div class="header">
            <img src="assets/image/rheader.jpg" alt="jelajah">
            <div class="text"><h3>Jelajah</h3>
            <p style="font-size: 16px; ">Jelajahi kota-kota indah di Indonesia dengan ragam wisata dan budayanya</p></div>
        </div>
    <!-- </div> -->
    <div class="isi" style="margin: 5% 9%;">
        <div class="judul"><h1>Cari Tempat Wisata Terbaikmu!</h1></div>
        <div class="gallery">
          <div class="kotak">
            <img src="https://images.unsplash.com/photo-1542897644-e04428948020?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" alt="jog" class="image">
            <div class="arti">
              <h3>Bali</h3>
              <p>Bali adalah sebuah pulau di Indonesia yang dikenal karena memiliki pegunungan berapi yang hijau, terasering sawah yang unik, pantai, dan terumbu karang yang cantik.</p>
            <a href="bali.html">View More</a></div>
          </div>
          <div class="kotak">
            <img src="https://i.pinimg.com/564x/2a/cd/47/2acd478e56be7b47ce1e88256151d83b.jpg" alt="jog" class="image">
            <div class="arti">
              <h3>Bandung</h3>
              <p>Kota Bandung adalah kota metropolitan terbesar di Provinsi Jawa Barat, sekaligus menjadi ibu kota provinsi tersebut.</p>
            <a href="bandung.html">View More</a></div>
          </div>
          <div class="kotak">
            <img src="https://i.pinimg.com/564x/a3/d0/de/a3d0def46e44879c44456d2d29881563.jpg" alt="jog" class="image">
            <div class="arti">
              <h3>Lombok</h3>
              <p>Pulau Lombok adalah sebuah pulau di kepulauan Sunda Kecil atau Nusa Tenggara yang terpisahkan oleh Selat Lombok dari Bali di sebelah barat dan Selat Alas di sebelah timur dari Sumbawa.</p>
            <a href="lombok.html">View More</a></div>
          </div>
          <div class="kotak">
            <img src="https://images.unsplash.com/photo-1563244495-1de93ffe7c23?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" alt="jog" class="image">
            <div class="arti">
              <h3>Makassar</h3>
              <p>Makassar merupakan kota metropolitan terbesar di kawasan Indonesia Timur dan pada masa lalu pernah menjadi ibu kota Negara Indonesia Timur dan Provinsi Sulawesi </p>
            <a href="makassar.html">View More</a></div>
          </div>
          <div class="kotak">
            <img src="https://i.pinimg.com/564x/ed/46/78/ed4678dc27222cf6df6b4c04351c603b.jpg" alt="jog" class="image">
            <div class="arti">
              <h3>Padang</h3>
              <p>Kota Padang merupakan ibukota Provinsi Sumatra Barat yang terletak di pantai barat pulau Sumatra. Dilihat dari letak geografisnya, Kota Padang memiliki potensi-potensi daerah yang cukup bervariasi.</p>
            <a href="padang.html">View More</a></div>
          </div>
          <div class="kotak">
            <img src="https://i.pinimg.com/564x/87/b7/b7/87b7b7723e6151586130a210ded7b313.jpg" alt="jog" class="image">
            <div class="arti">
              <h3>Papua</h3>
              <p>Papua adalah provinsi yang terletak di bagian tengah Pulau Papua atau bagian paling timur wilayah Papua milik Indonesia.</p>
            <a href="papua.html">View More</a></div>
          </div>
          <div class="kotak">
            <img src="https://images.unsplash.com/photo-1594751812757-b7e79e7dd530?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" alt="jog" class="image">
            <div class="arti">
              <h3>Semarang</h3>
              <p>Kota Semarang adalah ibu kota Provinsi Jawa Tengah, Indonesia sekaligus kota metropolitan terbesar kelima di Indonesia</p>
            <a href="semarang.html">View More</a></div>
          </div>
          <div class="kotak">
            <img src="https://i.pinimg.com/564x/29/f3/2b/29f32bd8b175340fd45b1ff454fa088a.jpg" alt="jog" class="image">
            <div class="arti">
              <h3>Yogyakarta</h3>
              <p>Kota Yogyakarta atau yang sering disebut kota jogja. Merupakan kota yang sangat Istimewa. Bagai mana tidak selain disebut sebagai kota pelajar Jogja juga dikenal sebagai kota pariwisata,</p>
            <a href="yogyakarta.html">View More</a></div>
          </div>
        </div>
    </div>
    <script>
      function myFunction() {
          var x = document.getElementsByClassName("nav-kanan");
          if (x.className === "nav") {
            x.className += " responsive";
          } else {
            x.className = "nav";
          }
        }
    </script>
</body>
</html>