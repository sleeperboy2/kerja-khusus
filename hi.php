<!DOCTYPE html>
<?php
include('db.php');
?>
<html>
<head>
<title>Rumah</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="lost.css">
<script src="offlinePopup.js"></script>

</head>
<body>
  
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>SMKS2</b> Muzik</a>
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Program</a>
      <a href="#about" class="w3-bar-item w3-button">Tentang Kami</a>
      <a href="laporan.php" class="w3-bar-item w3-button">Laporan</a>
      <a href="logout.php" class="w3-bar-item w3-button">Log Keluar</a>

    </div>
  </div>
</div>

<!-- Header with parallax effect -->
<header class="parallax-header">
  <div class="header-content">
    <h1><b>Kelab Muzik</b></h1>
    <img src="img/schh.png" alt="sekolahh" width="250px" ><br>
    <p>Sistem rekod kehadiran SMKS2</p>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Programs</h3>
  </div>

  <div class="card-container">
  <div class="card">
  <div class="card-details">
    <p class="text-title">AKtiviti1</p>
  </div>
  <a href="program1.php"><button class="card-button">maklumat lanjut</button></a>
 
</div>
<div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti2</p>
  </div>
  <a href="program2.php"><button class="card-button">maklumat lanjut</button></a>
 

</div>
<div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti3</p>
  </div>
  <a href="program3.php"><button class="card-button">maklumat lanjut</button></a>
 

</div>
<div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti4</p>
  </div>
  <a href="program4.php"><button class="card-button">maklumat lanjut</button></a>
 

</div>

<div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti5</p>
  </div>
  <a href="program5.php"><button class="card-button">maklumat lanjut</button></a>
  </div>

  <div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti6</p>
  </div>
  <a href="program6.php"><button class="card-button">maklumat lanjut</button></a>
  </div>
  </div>

 

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Tentang Kelab Ini</h3>
    <p>Kelab ini telah diwujudkan untuk mecungkil bakat dalam diri para pelajar
    </p>
  </div>

  
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/member1.jpg" alt="John" style="width:100%">
      <h3>Kaviraj</h3>
      <p class="w3-opacity">PENGURUSI</p>
      <p>merupakan antara ahli yang aktif dalam kelab ini</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/member2.jpg" alt="jon" style="width:100%">
      <h3>Johnathan</h3>
      <p class="w3-opacity">AJK 1</p>
      <p>pemain gitar terbaik sekolah</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/member3.jpg" alt="eve" style="width:100%">
      <h3>Evelyn</h3>
      <p class="w3-opacity">AJK 2</p>
      <p>penyanyi terbaik sekolah</p>
    </div>
    
    
  </div>

<!-- Image of location/map -->
<div class="w3-container">
  <img src="img/map1.jpg" class="w3-image" style="width:70%">
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Dijana Oleh :Avinaash </p>
</footer>
</body>
</html>
