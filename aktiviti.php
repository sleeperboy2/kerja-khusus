<!DOCTYPE html>
<html>
<?php
include('db.php');
?>
<head>
<title>aktiviti</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="action.css">
<link rel="stylesheet" href="lost.css">
<script src="offlinePopup.js"></script>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top" style="font-family: Times New Roman, Times, serif;
    font-size: larger;">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card">
    <a href="admin.php" class="w3-bar-item w3-button"><b>SMKS2</b> Muzik</a>
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


<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel" style="font-family: Times New Roman, Times, serif;
    font-size: large;">
    <h1 style="font-family: Times New Roman, Times, serif;
    font-size: 40px;"><b>Aktiviti</b></h1>
    <p>tambah atau update aktiviti</p>
  </div>

  
  
  <!-- Grid -->
  <div class="w3-row w3-container" style="font-family: Times New Roman, Times, serif;
    font-size: large;">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Aktiviti</th>
                                            <th>Nama Aktiviti</th>
                                            <th>Lokasi</th>
                                            <th>Tarikh</th>
                                            <th>Masa</th>
                                            <th>Tentang program</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('db.php');
										$sql="select * from aktiviti";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{

												echo"<tr class='gradeC'>
                                                     <td>".$row['idaktiviti']."</td>
                                                     <td>".$row['namaaktiviti']."</td>
                                                     <td>".$row['lokasi']."</td>
                                                     <td>".$row['tarikh']."</td>
                                                     <td>".$row['masa']."</td>
                                                     <td>".$row['caption']."</td>
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
			<h1 style="font-family: Times New Roman, Times, serif;
    font-size: 40px;">Update Aktiviti</h1>
			<input type="text" name="id" placeholder="ID Aktiviti (1 - 6)" />
			<input type="text" name="name" placeholder="Nama Aktiviti" />
            <input type="text" name="lokasi" placeholder="Lokasi" />
            <input type="date" name="tarikh" placeholder="Tarikh" />
            <input type="time" name="masa" placeholder="Masa" />
            <input type="text" name="caption" placeholder="Caption" />

			<button name="reg">Update</button>
		</form>
	</div>
                                        <div>

                                        <?php
   include('db.php');
   if(isset($_POST['reg'])) { 
      $idp = mysqli_real_escape_string($con,$_POST['id']);
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $lokasi = mysqli_real_escape_string($con,$_POST['lokasi']);
      $tarikh = mysqli_real_escape_string($con,$_POST['tarikh']);
      $masa = mysqli_real_escape_string($con,$_POST['masa']);      
      $caption = mysqli_real_escape_string($con,$_POST['caption']);
      $sql ="update aktiviti set namaaktiviti = '$name',lokasi = '$lokasi',tarikh = '$tarikh',masa = '$masa',caption = '$caption'  where idaktiviti = '$idp'";
	  if(mysqli_query($con,$sql))
	  {
		echo '<script>alert("Aktiviti sudah dikemaskini") </script>' ;		
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
