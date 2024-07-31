<!DOCTYPE html>
<html>
<?php
include('db.php');
session_start();

if (isset($_POST['reg'])) {
    $user = $_SESSION['user'];

    $current_time = time();
    $start_time = strtotime("2024-01-26 00:00:00");
    $end_time = strtotime("2024-01-26 17:00:00");

    if ($current_time < $start_time) {
        echo '<script>alert("Maaf, masa pendaftaran belum mula.")</script>';
    } elseif ($current_time > $end_time) {
        echo '<script>alert("Maaf, masa pendaftaran telah tamat.")</script>';
    } else {
        $check_sql = "SELECT * FROM `kehadiran` WHERE `idahli`='$user' AND `idaktiviti`='1'";
        $result = mysqli_query($con, $check_sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<script>alert("Anda sudah mendaftar untuk aktiviti ini sebelum ini.")</script>';
        } else {
            $sql = "INSERT INTO `kehadiran`(`idahli`, `idaktiviti`) VALUES ('$user','1')";

            if (mysqli_query($con, $sql)) {
                echo '<script>alert("Ahli sudah didaftarkan. Sila hadiri aktiviti ini.")</script>';
            } else {
                echo '<script>alert("Ralat! Masalah telah berlaku")</script>';
            }
        }
    }
}
?>


<head>
<title>Aktivti</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="program.css">
<link rel="stylesheet" href="lost.css">
<script src="offlinePopup.js"></script>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>SMKS2</b>Muzik</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/sk/index.php" class="w3-bar-item w3-button">Program</a>
      <a href="/sk/index.php" class="w3-bar-item w3-button">Tentang Kami</a>
      <a href="/sk/laporan.php" class="w3-bar-item w3-button">Laporan</a>
      <a href="/sk/logout.php" class="w3-bar-item w3-button">Log Keluar</a>
    </div>
  </div>
</div>


<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>Aktiviti</b></h1>
    <p>sila tekan hadir apabila hadir pada hari aktiviti tersebut</p>
  </div>

  <div class="container">
      <img src="img/house2.jpg" style="width:100%; ">
      </div
    </div>
  </div>
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Maklumat Tentang Program Ini</span>
      <form action="#" method="post">
      <button name="reg" class="tooltip">Hadir<span class="tooltiptext">guru akan sahkan kehadiran anda</span></button>
		</form>
    </div>
    <div class="card">
    <div class="info">
      <h3>Nama Aktiviti</h3>
      <p><?php 
        $sql = "SELECT* FROM aktiviti WHERE idaktiviti = '6';";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row["namaaktiviti"];
      ?></p>
    </div>
  
    <div class="info">
      <h3>Lokasi</h3>
      <p><?php 
        $sql = "SELECT * FROM aktiviti WHERE idaktiviti = '6';";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row["lokasi"];
      ?></p>
    </div>

    <div class="info">
      <h3>Tarikh & Masa</h3>
      <p><?php 
        $sql = "SELECT * FROM aktiviti WHERE idaktiviti = '6';";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row["tarikh"];
        echo ", pada ";
        echo $row["masa"];
      ?></p>
    </div>

    <div class="info">
      <h3>Tentang Program</h3>
      <p><?php 
        $sql = "SELECT * FROM aktiviti WHERE idaktiviti = '6';";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row["caption"];
      ?></p>
    </div>
  </div>
  </div>
  <div class="w3-center w3-padding-64" id="contact">
  </div>
<script src="lostp.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>

</body>
</html>
