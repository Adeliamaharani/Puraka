<?php 
session_start();
include 'conf/connection.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/stylekota.css">
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
            <li><a href="index.html" style="margin-left: 70px;">Home</a></li>
            <li><a href="jelajah.html">Jelajah</a></li>
            <li><a href="cerita.html">Cerita</a></li>
            <li><a href="about.html">About</a></li>
          </ul>
        </div>
        <div class="nav-kanan">
          <ul>
            <li><i class="fa fa-search"></i><input type="text" name="search" placeholder="Search.."></li>
            <li><a href=""><button class="button button1" style="margin-right: 80px; margin-left: 15px;">Log In</button></a></li>
            <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i></li>
            </a>
          </ul>
        </div>  
      </div>
    <div class="header">
        <img src="../assets/image/bali.JPG" alt="jelajah">
        <div class="text">
          <h1>Bali</h1>
        <p>Pulau dewata Bali, terdiri dari pulau-pulau kecil diantaranya pulau Nusa Lembongan, Ceningan, Nusa Penida dan Menjangan. Pulau-pulau tersebut merupakan wilayah dari Provinsi Bali. Mayoritas penduduknya beragama Hindu, identik dengan bangunan-bangunan pura sebagai stana Tuhan, sehingga Bali dikenal juga sebagai pulau Seribu Pura dan Pulau Dewata,  Bali juga memiliki banyak keunikan, budaya seni, tradisi dan alam cantik sehingga menjadi destinasi wisata dunia</p>
      </div>
    </div>
<!-- </div> -->
<div class="isi" style="margin: 5% 9%;">
    <div class="dropdown">
      <p style="display: inline;">Search by:</p>
      <button onclick="myFunction()" class="dropbtn">Wisata <i class="fa fa-sort-down"></i></button>
      <div id="myDropdown" class="dropdown-content">
        <a href="bali1.html">Budaya</a>
      </div>
    </div>
  <div class="gallery"> <!--gallery-->
    <div class="kotak">
      <img src="https://virustraveling.com/wp-content/uploads/2018/04/santai-di-keseruan-hidden-canyon-bali.jpg" alt="foto">
      <div class="content">
        <a href="https://virustraveling.com/hidden-canyon-beji-guwang-bali">Hidden Canyon Beji Guwang, Seru dan Menantang</a>
      <p>Ga seperti biasanya, Rumah Ceria Ubud, yang tak lain adalah sebuah kos-kosan tempat saya tinggal di Ubud, tiba-tiba...</p></div>
    </div>
    <div class="kotak">
      <img src="https://2.bp.blogspot.com/-BGAvJ7C0k5M/W264K0SQPMI/AAAAAAAAOME/VjEn3i7CKgc_7WY3L-zx7wZSDNFTx2McwCLcBGAs/s1600/Pura%2Bpenari%2Bkecak.jpg" alt="foto">
      <div class="content">
        <a href="https://www.khairulleon.com/2018/08/berburu-sunset-di-karang-boma-uluwatu-Bali.html">Berburu Sunset di Karang Boma, Uluwatu Bali</a> 
        <p>Kalo disuruh pilih antara sunrise dan sunset, aku pasti memilih sunset. Sebab, untuk..</p>
      </div>
    </div>
    <div class="kotak">
      <img src="https://blog.airpaz.com/wp-content/uploads/ulun-pura.jpg" alt="foto">
      <div class="content">
        <a href="https://blog.airpaz.com/id/pura-ulun-danu-bratan-bali/">Pura Ulun Danu Bratan, Bali</a>
        <p>Bagi Anda yang sering mengunjungi Pulau Bali, tentunya sudah tidak asing dengan kawasan Bedugul...</p>
      </div>
    </div>
    <div class="kotak">
      <img src="https://langkahdody.com/wp-content/uploads/2019/09/1-5.jpg" alt="foto">
      <div class="content">
        <a href="https://langkahdody.com/tari-kecak-di-uluwatu-bikin-merinding/">Tari Kecak Di Uluwatu Bikin Merinding</a>
        <p>Untuk menonton pertunjukan Tari Kecak ini pastinya kita harus datang ke Pura Uluwatu...</p> 
      </div>
    </div>
</div>
<script>
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  </script>
  
  
</body>
</html>