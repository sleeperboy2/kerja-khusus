<!DOCTYPE html>
<html>
<?php
include('db.php');
?>
<head>
<title>Laporan</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="action.css">
<link rel="stylesheet" href="lost.css">
<script src="offlinePopup.js"></script>
<script src="lapor.js"></script>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top"  style="font-family: Times New Roman, Times, serif;
    font-size: larger;">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>SMKS2</b> Muzik</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Program</a>
      <a href="index.php" class="w3-bar-item w3-button">Tentang Kami</a>
      <a href="laporan.php" class="w3-bar-item w3-button">Laporan</a>
      <a href="logout.php" class="w3-bar-item w3-button">Log Keluar</a>
    </div>
  </div>
</div>


<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel" style="font-family: Times New Roman, Times, serif;
    font-size: larger;">
    <h1 style="font-family: Times New Roman, Times, serif;
    font-size: 45px;"><b>Laporan</b></h1>
    <p>Kehadiran anda dalam kelab ini</p>
  </div>

  
  <div class="card">
  <!-- Grid -->
  <div class="w3-row w3-container">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Ahli</th>
                                            <th>ID Aktiviti</th>
											                      <th>Kehadiran</th>
                                            <th>Disahkan Oleh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('db.php');
                    session_start();
                    
if (!isset($_SESSION['user'])) {
    header("Location: login.php?message=Sila login dahulu");
    exit();
};


                    $user = $_SESSION['user']; 
										$sql="select * from kehadiran WHERE idahli = '$user'";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{

												echo"<tr class='gradeC'>
                                                     <td>".$row['idahli']."</td>
                                                     <td>".$row['idaktiviti']."</td>
                                                     <td>".$row['hadir']."</td> 
                                                     <td>".$row['idadmin']."</td> 
													 </tr>";
											}

									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
  </div>
    




</body>
</html>
