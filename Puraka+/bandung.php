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
	<title>Bandung</title>
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
  <h1>Bandung</h1>
  <p>Bandung adalah salah satu kota terbesar di Indonesia dan ibu kota Provinsi Jawa Barat. Terletak di dataran tinggi Jawa Barat pada ketinggian 715 m (2.350 kaki) di wilayah yang indah. Bandung juga dikenal sebagai 'Kota Bunga' atau Kota Kembang dalam Bahasa Indonesia. Bandung terkenal dengan orkestra Angklung bambu dan tradisi teater Sunda klasik, tari, dan musik gamelan. Bandung, yang telah lama dianggap sebagai Paris di Jawa karena kehidupan budayanya yang dinamis, sekarang berjuang dengan pertumbuhan lalu lintas, polusi, dan masalah perkotaan lainnya.
  </p>
</div>

<button class="tabjudul" onclick="openPage('wisata', this, '#FEAC24')">Wisata</button>
<button class="tabjudul" onclick="openPage('budaya', this, '#FEAC24')" id="defaultOpen">Budaya</button>

    <div id="wisata" class="tabfeed">
      <div class="container">
      <div class="kotak">
          <img src="http://3.bp.blogspot.com/-ppy3KO0v2eI/W4D5BHmElqI/AAAAAAAAFjs/0UxLC6zvzBwinqyXqnwc6WzpibVxupQAQCK4BGAYYCw/s1600/IMG20180824055742.jpg" alt="Avatar" style="width:100%">
          <div class="isi">
            <a href="http://www.irhamfaridh.com/2018/08/orchid-forest-cikole-wisata-alam-kekinian-bandung.html">Orchid Forest Cikole, Wisata Alam Kekinian Di Bandung</a> 
            <p>Apa yang kalian pikirkan tentang Bandung? Peuyeum? Peyempuan? Atau Gedung Sate? Bandung mempunyai banyak banget destinasi yang bisa dikunjungi. Gak heran sih kalau setiap weekend...</p> 
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