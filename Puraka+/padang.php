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
	<title>Padang</title>
	<link rel="stylesheet" href="http://127.0.0.1:5500/assets/css/stylekota.css">
	<script type="text/javascript" src="http://127.0.0.1:5500/assets/js/puraka.js"></script>
</head>
<body>
	<div class="navi">
    <a class="logo" href="http://127.0.0.1:5500/views/index.html">Puraka</a>
    <a class="nav-item" href="http://127.0.0.1:5500/views/index.html"><i class="fa fa-fw fa-home"></i> Home</a>
    <a class="nav-item" href="#judul">Jelajah</a>
    <a class="nav-item" href="#">Rencana Perjalanan</a>
    <a class="nav-item" href="http://127.0.0.1:5500/views/review.html">Cerita Seru</a>
    <a class="nav-item" href="#about">About</a>
    
    <div class="navikanan">
      <a class="nav-item" href="http://127.0.0.1:5500/views/login.html">Account</a>
    </div>

    <div class="searchbox">
      <form action="/action_page.php">
        <input type="text" placeholder="Nama wisata/budaya/kota" name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>

<div class="atas">
  <h1>Padang</h1>
  <p>Kota Padang merupakan ibukota Provinsi Sumatra Barat yang terletak di pantai barat pulau Sumatra. Dilihat dari letak geografisnya, Kota Padang memiliki potensi-potensi daerah yang cukup bervariasi. Potensi-potensi ini terdapat didaerah daratan dan lautan. Luas Kota Padang adalah 694,96 km2 atau setara dengan 1,65 persen dari Provinsi Sumatra Barat. Ketinggian wilayah Kota Padang bervariasi yaitu antara 0−1.853 m diatas permukaan laut. Kota Padang memiliki banyak sungai, yaitu 5 sungai besar dan 16 sungai kecil. Kota Padang juga memiliki pantai sepanjang 68,126 km serta 19 buah pulau kecil yang menyebar di sisi pantainya.
  </p>
</div>

<button class="tabjudul" onclick="openPage('wisata', this, '#FEAC24')">Wisata</button>
<button class="tabjudul" onclick="openPage('budaya', this, '#FEAC24')" id="defaultOpen">Budaya</button>

    <div id="wisata" class="tabfeed">
      <div class="container">
      <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
        <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
      <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
      <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
      <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
      <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
    </div>
</div>
    <div id="budaya" class="tabfeed">
      <div class="container">
      <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
      <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
      <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
      <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
      <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
      <div class="kotak">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="#">judul</a> 
            <p>isi singkat blognya</p> 
          </div>
      </div>
    </div>
  </div>
</body>
</html>