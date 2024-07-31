
<!DOCTYPE html>
<?php
include('db.php');
?>

<html>
<head>
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="index2.css">
<link rel="stylesheet" href="lost.css">
<script src="offlinePopup.js"></script>

</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top"  style="font-family: Times New Roman, Times, serif;
    font-size: larger;">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card">
    <a href="admin.php" class="w3-bar-item w3-button"><b>SMKS2</b>Muzik</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="adminaction.php" class="w3-bar-item w3-button">Admin</a>
      <a href="ahliaction.php" class="w3-bar-item w3-button">Ahli</a>
      <a href="aktiviti.php" class="w3-bar-item w3-button">Aktiviti</a>
      <a href="kehadiran.php" class="w3-bar-item w3-button">Rekod Kehadiran</a>
      <a href="import.php" class="w3-bar-item w3-button">Import</a>
      <a href="laporanadmin.php" class="w3-bar-item w3-button">Maklumat</a>
      <a href="query.php" class="w3-bar-item w3-button">Carian</a>
      <a href="logout.php" class="w3-bar-item w3-button">Log Keluar</a>
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
<header class="w3-display-container  parallax-header" id="home">
  <div class="w3-display-middle ">
    <h1 class="w3-xxlarge w3-text-white" style="font-family: Times New Roman, Times, serif;
    font-size: large;">
      <span class="w3-padding w3-black w3-opacity-min"><b>SMKS2</b></span>
      <span class="w3-hide-small w3-text-light-grey">Kelab Muzik</span>
    </h1>
  </div>
</header>
<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

   <!-- Project Section -->
   <div class="w3-container w3-padding-32" id="projects"  style="font-family: Times New Roman, Times, serif;
    font-size: large;">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"  style="font-family: Times New Roman, Times, serif;
    font-size: 40px">Programs</h3>
  </div>

  <div class="card-container"  style="font-family: Times New Roman, Times, serif;
    font-size: large;">
  <div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti1</p>
  </div>
  <a href="program1a.php"><button class="card-button">maklumat lanjut</button></a>
 
</div>
<div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti</p>
  </div>
  <a href="program2a.php"><button class="card-button">maklumat lanjut</button></a>
 

</div>
<div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti</p>
  </div>
  <a href="program3a.php"><button class="card-button">maklumat lanjut</button></a>
 

</div>
<div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti</p>
  </div>
  <a href="program4a.php"><button class="card-button">maklumat lanjut</button></a>
 

</div>

<div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti</p>
  </div>
  <a href="program5a.php"><button class="card-button">maklumat lanjut</button></a>
  </div>

  <div class="card">
  <div class="card-details">
    <p class="text-title">Aktiviti</p>
  </div>
  <a href="program6a.php"><button class="card-button">maklumat lanjut</button></a>
  </div>
  </div>


  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about"  style="font-family: Times New Roman, Times, serif;
    font-size: larger;">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"  style="font-family: Times New Roman, Times, serif;
    font-size: 40px;">Tentang Kelab Ini</h3>
    <p>Kelab ini telah diwujudkan untuk mecungkil bakat dalam diri para pelajar</p>
  </div>

  <div class="w3-row-padding "  style="font-family: Times New Roman, Times, serif;
    font-size: large;">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/member1.jpg" alt="kavi" style="width:100%">
      <h3>Kaviraj</h3>
      <p class="w3-opacity">PENGURUSI</p>
      
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/member2.jpg" alt="jon" style="width:100%">
      <h3>Jonathan</h3>
      <p class="w3-opacity">AJK 1</p>
    
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/member3.jpg" alt="eve" style="width:100%">
      <h3>Evelyn</h3>
      <p class="w3-opacity">AJK 2</p>
      
    </div>
  </div>
 
<!-- Image of location/map -->
<div class="w3-container">
  <img src="img/map1.jpg" class="w3-image" style="width:70%">
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16"  style="font-family: Times New Roman, Times, serif;
    font-size: large;">
  <p>Dijana Oleh  Avinaash</a></p>
</footer>

</body>
</html>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="scroll.js"></script>
</body>
</html>