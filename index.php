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
<link rel="stylesheet" href="index3.css">
<script src="offlinePopup.js"></script>
<script src="hi.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="scroll.js"></script>

</head>
<body>

<div class="w3-top"   style=" font-family: Times New Roman, Times, serif;  font-size:large;">
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

<header class="w3-display-container  parallax-header" id="home">
  <div class="w3-display-middle ">
    <h1 class="w3-xxlarge w3-text-white">
      <span class="w3-padding w3-black w3-opacity-min"   style=" font-family: Times New Roman, Times, serif;"><b>SMKS2</b></span>
      <span class="w3-hide-small w3-text-light-grey"   style=" font-family: Times New Roman, Times, serif;">Kelab Muzik</span>
    </h1>
  </div>
</header>

<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Aktiviti</h3>
  </div>

  <div class="card-container">
  <div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti1</p>
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
  <div class="persembahan" style="display: flex; height: 100vh;  justify-content: center; align-items: center; margin-top:29px; margin-bottom:30px;">
  <div class="w3-content w3-display-container" style="width: 500px; margin-top: 35px; margin-left: 10px; ">
    <img class="mySlides" src="img/per1.jpg" style="width: 150%;">
    <img class="mySlides" src="img/per2.jpg" style="width: 150%;">
    <img class="mySlides" src="img/per5.jpg" style="width: 147%;">
    <button class="w3-button w3-light" onclick="plusDivs(-1)">❮ SEBELUM</button>
    <button class="w3-button w3-light" onclick="plusDivs(1)">SELEPAS ❯
  </div>
  <div  style="margin-right:10px; width:40%; font-size: 18px;">
    <p>Persembahan yang telah dilakukan oleh ahli kelab muzik pada tahun 2023</p><br>
    <p>Dengan sukacita dan penghargaan yang mendalam, kami ingin mengekspresikan rasa terima kasih atas dedikasi dan kontribusi luar biasa mereka dalam persembahan sekolah terbaru. Keberanian dan keterlibatan mereka telah membawa semangat baru dan keceriaan kepada seluruh sekolah, menciptakan momen yang akan diingat oleh semua yang hadir.

Dalam persembahan itu, mereka telah menunjukkan tidak hanya bakat dan keterampilan yang luar biasa, tetapi juga semangat kebersamaan yang sungguh menginspirasi. Keterlibatan mereka tidak hanya mencerminkan dedikasi terhadap seni pertunjukan, tetapi juga sikap positif dan semangat kumpulan yang membantu memperkaya pengalaman sekolah bagi semua</p>
  </div>
  <script src="sembah.js"></script>
  <script src="slideshow.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
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