<!DOCTYPE html>
<html>
<?php
	$server="localhost";
	$userid ="root";
	$Password = "";
	$myDB = "kehadiran";

   $con = mysqli_connect($server,$userid,$Password,$myDB);

	if (mysqli_connect_errno()) {
		# code...
		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  session_start();
  $user = $_SESSION['user']; 
?>

<head>
<title>Kelab Arkitek</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card">
    <a href="admin.php" class="w3-bar-item w3-button"><b>SMKS2</b> Muzik</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="adminaction.php" class="w3-bar-item w3-button">Admin</a>
      <a href="ahliaction.php" class="w3-bar-item w3-button">Ahli</a>
      <a href="aktiviti.php" class="w3-bar-item w3-button">Aktiviti</a>
      <a href="kehadiran.php" class="w3-bar-item w3-button">Rekod Kehadiran</a>
      <a href="import.php" class="w3-bar-item w3-button">Import</a>
      <a href="laporanadmin.php" class="w3-bar-item w3-button">Laporan</a>
      <a href="logout.php" class="w3-bar-item w3-button">Log Keluar</a>
    </div>
  </div>
</div>


<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>Laporan</b></h1>
    <p>tulis la sikit</p>
  </div>

  
  
  <!-- Grid -->
  <div class="w3-row w3-container">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>ID Kehadiran</th>
                                            <th>ID Ahli</th>
                                            <th>ID Aktiviti</th>
											<th>Kehadiran</th>
                                            <th>Disahkan Oleh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('db.php');
                    $user = $_SESSION['user']; 
										$sql="select * from kehadiran";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{

												echo"<tr class='gradeC'>
                        <td>".$row['idkehadiran']."</td>                             
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
                    <div class="form-container sign-up-container">
		<form action="#" method="post">
			<h1>Rekod Kehadiran</h1>
			<input type="number" name="idk" placeholder="ID Kehadiran" />
      <input type="text" name="hadir" placeholder="Kehadiran" />

			<button name="reg">Update</button>
		</form>
	</div>
  <div class="form-container sign-up-container">
		<form action="#" method="post">
			<h1>Delete Kehadiran</h1>
			<input type="number" name="delete" placeholder="ID Kehadiran" />
			<button name="del">Delete</button>
		</form>
	</div>
  <?php
include('db.php');
if(isset($_POST['reg'])) { 
   $user = $_SESSION['user']; 
   $idk = mysqli_real_escape_string($con,$_POST['idk']);
   $hadir = mysqli_real_escape_string($con,$_POST['hadir']);
   $fk = "SET FOREIGN_KEY_CHECKS=0";
   if(mysqli_query($con,$fk)){
    $sql ="update `kehadiran` set `idadmin` = '$user', `hadir` = '$hadir' where `kehadiran`.`idkehadiran` = '$idk'";
    if(mysqli_query($con,$sql))
      {
     echo '<script>alert("Kehadiran Sudah Direkod.") </script>' ;		
      }
    else {
    echo '<script>alert("Ralat! Masalah telah berlaku") </script>' ;
      }
      }
else {
  echo '<script>alert("Ralat! Masalah telah berlaku") </script>' ;

}}
if(isset($_POST['del'])) {
  $idk = mysqli_real_escape_string($con,$_POST['delete']);
  $sql = "DELETE FROM kehadiran WHERE  idkehadiran = '$idk'";
  if(mysqli_query($con,$sql))
  {
  echo '<script>alert("Kehadiran sudah Didelete.  Sila refresh page ini.") </script>' ;			
  }
  else {
  echo '<script>alert("Ralat! Masalah telah berlaku") </script>' ;
  }
 }
?>



<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>