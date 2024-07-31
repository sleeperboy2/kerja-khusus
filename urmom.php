
<!DOCTYPE html>
<?php
include('db.php');

?>
<html>
<head>
<title>Kelab Arkitek</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>BR</b> Architects</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Program</a>
      <a href="#about" class="w3-bar-item w3-button">Tentang Kami</a>
      <a href="laporan.php" class="w3-bar-item w3-button">Laporan</a>
      <a href="logout.php" class="w3-bar-item w3-button">Log Keluar</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="img/library.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>BR</b></span> <span class="w3-hide-small w3-text-light-grey">Architects</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px ; background-color:black;">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Programs</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-third w3-margin-bottom">
      <div class="w3-display-container">
        <a href="program1.php">
        <div class="w3-display-topleft w3-black w3-padding">Lawatan 1</div>
        <img src="img/house2.jpg" alt="House" style="width:100%" ></a>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <div class="w3-display-container">
      <a href="program2.php">
        <div class="w3-display-topleft w3-black w3-padding">Lawatan 1</div>
        <img src="img/house2.jpg" alt="House" style="width:100%" ></a>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <div class="w3-display-container">
      <a href="program3.php">
        <div class="w3-display-topleft w3-black w3-padding">Lawatan 1</div>
        <img src="img/house2.jpg" alt="House" style="width:100%" ></a>
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-third w3-margin-bottom">
      <div class="w3-display-container">
      <a href="program4.php">
        <div class="w3-display-topleft w3-black w3-padding">Lawatan 1</div>
        <img src="img/house2.jpg" alt="House" style="width:100%" ></a>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <div class="w3-display-container">
      <a href="program5.php">
        <div class="w3-display-topleft w3-black w3-padding">Lawatan 1</div>
        <img src="img/house2.jpg" alt="House" style="width:100%" ></a>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <div class="w3-display-container">
      <a href="program6.php">
        <div class="w3-display-topleft w3-black w3-padding">Lawatan 1</div>
        <img src="img/house2.jpg" alt="House" style="width:100%" ></a>
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Tentang Kelab Ini</h3>
    <p>pandai pandai korang la tulis sendiri, bukan kerja aku hehe
    </p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/team2.jpg" alt="John" style="width:100%">
      <h3>John Doe</h3>
      <p class="w3-opacity">PENGURUSI</p>
      <p>masukkan caption sendiri</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/team2.jpg" alt="Jane" style="width:100%">
      <h3>Jane Doe</h3>
      <p class="w3-opacity">AJK 1</p>
      <p>masukkan caption sendiri</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/team2.jpg" alt="Mike" style="width:100%">
      <h3>Mike Ross</h3>
      <p class="w3-opacity">AJK 2</p>
      <p>masukkan caption sendiri</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/team2.jpg" alt="Dan" style="width:100%">
      <h3>Dan Star</h3>
      <p class="w3-opacity">AJK 3</p>
      <p>masukkan caption sendiri</p>
    </div>
  </div>

  
<!-- Image of location/map -->
<div class="w3-container">
  <img src="img/map.jpg" class="w3-image" style="width:100%">
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Dijana Oleh : </a></p>
</footer>

</body>
</html>