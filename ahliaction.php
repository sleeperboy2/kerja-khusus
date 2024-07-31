<!DOCTYPE html>
<html>
<?php
include('db.php');
?>
<head>
<title>ahli</title>
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
<div class="w3-top"  style="font-family: Times New Roman, Times, serif;
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
    font-size: 40px;"><b>Ahli</b></h1>
    <p>Ahli yang terdapat dalam sistem ini.</p>
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
                                            <th>ID Ahli</th>
                                            <th>Nama Ahli</th>
                                            <th>Kata Laluan Ahli</th>
                                            <th>Jantina</th>
                                            <th>Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('db.php');
                    
										$sql="select * from ahli";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{

												echo"<tr class='gradeC'>
                                                     <td>".$row['idahli']."</td>
                                                     <td>".$row['namaahli']."</td>
                                                     <td>".$row['klahli']."</td>
                                                     <td>".$row['jantina']."</td>
                                                     <td>".$row['kelas']."</td>
													 </tr>";
											}

									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-container sign-up-container" style="font-family: Times New Roman, Times, serif;
    font-size: large;">
		<form action="#" method="post">
			<h1 style="font-family: Times New Roman, Times, serif;
    font-size: 40px;">Pendaftaran Baharu</h1>
			<input type="text" name="user" placeholder="ID Ahli (Perlu Unik)" minlength="12" maxlength="12" required />
			<input type="text" name="name" placeholder="Nama Ahli" />
			<input type="password" name="pass" placeholder="Kata Laluan" />
      <input type="text" name="jantina" placeholder="Jantina" />
			<input type="password" name="kelas" placeholder="Kelas" />
      <button name="reg" class="tooltip">Daftar Masuk<span class="tooltiptext">Tambah Ahli?</span></button>
		</form>
	</div>
                                        <div>
                                        <div class="form-container sign-up-container">
		<form action="#" method="post">
			<h1 style="font-family: Times New Roman, Times, serif;
    font-size: 40px;">Delete Ahli</h1>
			<input type="text" name="delete" placeholder="ID Ahli " />
			<button name="del">Delete</button>
		</form>
	</div>

  <div>
                                        <div class="form-container sign-up-container">
		<form action="#" method="post">
			<h1 style="font-family: Times New Roman, Times, serif;
    font-size: 40px;">Import Ahli</h1>
    <form method="POST" action="processimport1.php" enctype="multipart/form-data"></form>
		<label for="file">File: </label>
    <input type="file" id="file" name="file" onchange="fileEntered()"style="color:black;">
    <button type="submit" name="import" class="btn btn-primary btn-sm">Import Ahli</button>
		</form>
	</div>
                                        <?php
   include('db.php');
   if(isset($_POST['reg'])) {
      // username and password sent from form 
      $idp = mysqli_real_escape_string($con,$_POST['user']);
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $pass = mysqli_real_escape_string($con,$_POST['pass']);
	    $jantina = mysqli_real_escape_string($con,$_POST['jantina']);
	  $kelas = mysqli_real_escape_string($con,$_POST['kelas']);

      $sql ="INSERT INTO `ahli`( `idahli`, `namaahli`,`klahli`,`jantina`,`kelas`) VALUES ('$idp','$name','$pass','$jantina','$kelas')";
	  if(mysqli_query($con,$sql))
	  {
		echo '<script>alert("Ahli sudah didaftarkan. Sila refresh page ini.") </script>' ;	
  
	  }
	  else {
		echo '<script>alert("Ralat! Masalah telah berlaku") </script>' ;
	  }
   }
   if(isset($_POST['del'])) {
    $idp = mysqli_real_escape_string($con,$_POST['delete']);
    $sql = "DELETE FROM ahli WHERE idahli = '$idp'";
    if(mysqli_query($con,$sql))
    {
		echo '<script>alert("Ahli sudah Didelete.  Sila refresh page ini.") </script>' ;	
	  }
	  else {
		echo '<script>alert("Ralat! Masalah telah berlaku") </script>' ;
	  }
   }
?>
 <script>
        function fileEntered() {
            const fileInput = document.getElementById('file');
            if (fileInput.files.length > 0) {
                alert('Fail telah dimuatnaikan');
            }
        }
    </script>

</body>
</html>
