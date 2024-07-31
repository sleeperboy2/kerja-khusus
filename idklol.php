<!DOCTYPE html>
<html>
<?php
include('db.php');
?>
<style>
  table{
  width:100%;
}
th{
    border: 1.5px solid;
    border-color: #7F5539;
    background-color: #B08968;
    color: white;
    font-size: large;
}
tr{
    border: 1.5px solid;
}
td{
    border: 1.5px solid;
    background-color: #FFE8D6;
    color: #7F5539;
    text-align: center;
}
td {
  transition-duration: 0.4s;
  cursor: pointer;
}
td:hover {
  background-color: blue;
  color: white;
}
th {
  transition-duration: 0.4s;
  cursor: pointer;
}
th:hover {
  background-color: blue;
  color: white;
}
.form-container {
	height: 100%;
	transition: all 0.6s ease-in-out;
    width: 50%;
    align-items: center;
    top: 50%;
    left: 50%;
    
}
button {
	border-radius: 20px;
	border: 1px solid #B08968;
	background-color: #B08968;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
    width: 50%;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #B08968;
}
input {
	background-color: #eee;
	border: none;
	padding: 12px 20px;
	width: 50%;
}
</style>
<head>
<title>Kelab Arkitek</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}

</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card">
    <a href="admin.php" class="w3-bar-item w3-button"><b>BR</b> Architects</a>
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
    <i class="fas fa-clock"></i>
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
                                            <th>ID Admin</th>
                                            <th>Nama Admin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('db.php');
                    session_start();
                    $user = $_SESSION['user']; 
										$sql="select * from admin";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{

												echo"<tr class='gradeC'>
                                                     <td>".$row['idadmin']."</td>
                                                     <td>".$row['namadmin']."</td>
													 </tr>";
											}

									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-container sign-up-container"  style="margin-left:25%;">
		<form action="#" method="post" >
			<h1>Pendaftaran Baharu</h1>
			<input type="text" name="user" placeholder="ID Admin (Perlu Unik)" />
			<input type="text" name="name" placeholder="Nama Admin" />
			<input type="password" name="pass" placeholder="Kata Laluan" />
			<button name="reg">Daftar Masuk</button>
		</form>
	</div>
                                        <div>
                                        <div class="form-container sign-up-container">
		<form action="#" method="post">
			<h1>Delete Admin</h1>
			<input type="text" name="delete" placeholder="ID Admin " />
			<button name="del">Delete</button>
		</form>
	</div>
                                        <?php
   include('db.php');
   if(isset($_POST['reg'])) {
      // username and password sent from form 
      $idp = mysqli_real_escape_string($con,$_POST['user']);
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $pass = mysqli_real_escape_string($con,$_POST['pass']);
      $sql ="INSERT INTO `admin`( `idadmin`, `namadmin`,`kladmin`) VALUES ('$idp','$name','$pass')";
	  if(mysqli_query($con,$sql))
	  {
		echo '<script>alert("Admin sudah didaftarkan. Sila refresh page ini.") </script>' ;		
	  }
	  else {
		echo '<script>alert("Ralat! Masalah telah berlaku") </script>' ;
	  }
   }
   if(isset($_POST['del'])) {
    $idp = mysqli_real_escape_string($con,$_POST['delete']);
    $sql = "DELETE FROM admin WHERE idadmin = '$idp'";
    if(mysqli_query($con,$sql))
    {
		echo '<script>alert("Admin sudah Didelete.  Sila refresh page ini.") </script>' ;			
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
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>