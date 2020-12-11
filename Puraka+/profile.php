<?php 
session_start();
include 'conf/connection.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styleprofile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
        <div class="navbar">
            <a href="index.html" class="logo">Puraka</a>
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
                <li><i class="fa fa-search"></i><input type="text" id="search" name="search" placeholder="Search.."></li>
                <li><a href=""><button class="button button1" style="margin-right: 63px; margin-left: 15px;">Log Out</button></a></li>
                <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i></li>
                </a>
              </ul>
            </div>  
		</div>
	<div class="container">
		<div class="sidenav">
			<div class="user">
				<img src="../assets/image/fotoprofile.png" alt="FOTO USER">
				<p>NAMA USER</p>
			</div>
			<button class="tablinks" onclick="openCerita(event, 'akun')">Akun</button>
			<button class="dropdown-btn">Cerita 
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<button class="tablinks" onclick="openCerita(event, 'buat')">Buat Cerita</button>
				<button class="tablinks" onclick="openCerita(event, 'histori')">Riwayat Cerita</button>
			</div>
			<button class="tablinks" onclick="openCerita(event, 'rp')">Rencana Perjalanan</button>
			<button class="tablinks" onclick="openCerita(event, 'set')">Setting</button>
		</div>
		<div class="isi">
			<div id="akun" class="tabcontent">
				<h1>Selamat Datang (nama user)!</h1>
			  </div>
			<div id="buat" class="tabcontent">
				<h1>Ceritakan pengalamanmu disini!</h1>
				<div class="input-cerita">
					<form action="">
						<table>
							<tr>
								<td style="vertical-align: top;"><label for="judul">Judul:</label></td>
								<td><input id="judul" type="text" name="judul" cols><br><br></td>
							</tr>
							<tr>
								<td style="vertical-align: top;"><label for="kota">Kota:</label></td>
								<td><select id="kota" name="kota">
									<option value="Bali">Bali</option>
									<option value="Bandung">Bandung</option>
									<option value="Lombok">Lombok</option>
									<option value="Makassar">Makassar</option>
									<option value="Padang">Padang</option>
									<option value="Papua">Papua</option>
									<option value="Yogyakarta">Yogyakarta</option>
								</select><br><br><br></td>
							</tr>
							<tr>
								<td style="vertical-align: top;"><label for="kategori">Kategori:</label></td>
								<td><select id="kategori" name="kategori">
									<option value="wisata">Wisata</option>
									<option value="Budaya">Budaya</option>
								</select><br><br><br></td>
							</tr>
							<tr>
								<td style="vertical-align: top;"><label for="cerita">Cerita:</label></td>
								<td><textarea name="cerita" style="font-size:12px; background-color: #f0f0f0; border-radius: 5px;"cols="80" rows="10"></textarea></td>
							</tr>
							<tr>
								<td><br><br><br></td>
								<td><button class="button button2" type="submit">Submit</button>
								</td>
							</tr>
						</table>
					</form>
				</div>
			  </div>
			  <div id="rp" class="tabcontent">
				
			  </div>
			  <div id="histori" class="tabcontent">
				
			  </div>
			  <div id="set" class="tabcontent">
				  <h1>Setting Account</h1>
				<!-- <form action="" method="">
					<table>
						<tr>
							<td><label for="nama">Nama</label></td>
							<td><input type="text" name="nama" id="input"><br><br></td>
						</tr>
						<tr>
							<td><label for="uname">Username</label></td>
							<td><input type="text" name="uname" id="input"><br><br></td>
						</tr>
						<tr>
							<td><label for="email">email</label></td>
							<td><input type="email" name="email" id="input"><br><br></td>
						</tr>

						<tr>
							<td><label for="alamat"></label></td>
							<td><input type="text" name="alamat" id="input"><br/><br/></td>
						</tr>
						<tr>
							<td><input type="radio" id="male" name="gender" value="male"></td>
							<td><label for="male">Male</label><br></td>
							<td><input type="radio" id="female" name="gender" value="female"></td>
							<td><label for="female">Female</label><br></td>
							<td><input type="radio" id="other" name="gender" value="other"></td>
							<td><label for="other">Other</label></td>
						</tr>
						<tr>
							<td><label for="bio">Deskprisi Singkat</label></td>
							<td><textarea name="bio"></textarea></td>
						</tr>
					</table>
				</form> -->
			  </div>
		</div>
	</div>
		<script>
			var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;

			for (i = 0; i < dropdown.length; i++) {
			dropdown[i].addEventListener("click", function() {
				// this.classList.toggle("active");
				var dropdownContent = this.nextElementSibling;
				if (dropdownContent.style.display === "block") {
				dropdownContent.style.display = "none";
				} else {
				dropdownContent.style.display = "block";
				}
			});
			}
			function openCerita(evt, ceritaName) {
				// Declare all variables
				var i, tabcontent, tablinks;

				// Get all elements with class="tabcontent" and hide them
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}

				// Get all elements with class="tablinks" and remove the class "active"
				tablinks = document.getElementsByClassName("tablinks");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				}

				// Show the current tab, and add an "active" class to the link that opened the tab
				document.getElementById(ceritaName).style.display = "block";
				evt.currentTarget.className += " active";
			}

</script>
</body>
</html>