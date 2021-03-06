<?php 
session_start();
include 'conf/connection.php';
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/stylecerita.css">
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
            <li><a href="login.html"><button class="button button1" style="margin-right: 80px; margin-left: 15px;">Log In</button></a></li>
            <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i></li>
            </a>
          </ul>
        </div>  
      </div>
    <div class="header">
        <img src="../assets/image/cheader.JPG" alt="jelajah">
        <div class="text">
            <!-- <p style="height: 1px;">Telusuri</p> -->
          <h1>Cerita Perjalanan</h1>
          <p>Pengguna PURAKA</p>
        
      </div>
    </div>
<!-- </div> -->
<div class="isi" style="margin: 5% 9%;">
    <div class="pembungkus">
        <h2>Pilih Kota</h2>
    </div>
    <div class="pilih">
      <a href=""><button class="button kota active" style="background-color: white; color: #dc6713; border: 1px solid #dc6713;">Bali</button></a>
      <a href=""><button class="button kota">Bandung</button></a>
      <a href=""><button class="button kota">Lombok</button></a>
      <a href=""><button class="button kota">Makassar</button></a>
      <a href=""><button class="button kota">Padang</button></a>
      <a href=""><button class="button kota">Papua</button></a>
      <a href=""><button class="button kota">Semarang</button></a>
      <a href=""><button class="button kota">Yogyakarta</button></a>
    </div>
    <div class="pembungkus">
        <h2>Cerita Perjalanan</h2>
    </div>
  <div class="gallery">  
    <div class="kotak">
      <img src="https://images.unsplash.com/photo-1581353723624-2bb7d9a802ae?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" alt="foto">
      <div class="content">
        <a href="">Exploring rice fields in Canggu</a>
        <p>by Dave Weatherall</p>
        <p>Perjalananku bersama teman-teman pada sabtu siang...</p> 
    </div>
    </div>
    <div class="kotak">
      <img src="https://images.unsplash.com/photo-1531891586784-7e52160f6e8b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" alt="foto">
      <div class="content">
        <a href="">Menikmati Pantai Balangan Bali</a> 
        <p>by Ruben Hutabarat</p>
        <p>Liburan akhir tahunku di Bali bersama orang -orang tercinta sangat..</p>
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