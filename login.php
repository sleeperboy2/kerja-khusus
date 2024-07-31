<!DOCTYPE html>
<?php
include('db.php');

?>
<html>
<head>
<title>Daftar</title>
<link rel="stylesheet" href="csslogin2.css">
</head>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="post">
			<h1>Pendaftaran Baharu</h1>
			<input type="text" name="user" maxlength="12"  minlength="12" required placeholder="ID Ahli" />
			<input type="text" name="name" placeholder="Nama Ahli" />
			<input type="password" name="pass" placeholder="Kata Laluan" />
			<input type="text" maxlength="1" name="jantina" placeholder="Jantina" oninput="this.value = this.value.toUpperCase()"/>
			<input type="text" name="kelas" placeholder="Kelas" />
			<button name="reg">Daftar Masuk</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="post">
			<h1>Log Masuk Ahli</h1>
			<input type="text" name="user" maxlength="12"  minlength="12" required placeholder="ID Ahli" />
			<input type="password" name="pass" placeholder="Kata Laluan" />
			<a href="loginadmin.php">Anda Admin? Sila Log Masuk Disini.</a>
			<button name="login">Log Masuk</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
			    <h1>Selamat Datang!</h1>
				<p>Sila masukkan keterangan diri anda.</p>
				<button class="ghost" id="signIn">Log Masuk</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Selamat Kembali ke kelab Muzik!</h1>
				<p>Sila log masuk menggunakan ID Ahli dan Kata laluan anda.</p>
			</div>
		</div>
	</div>
</div>
<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</html>
<?php
   include('db.php');
   if(isset($_POST['login'])) {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      $sql = "SELECT idahli FROM ahli WHERE idahli = '$myusername' and klahli = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = isset($row['active']);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
		session_start();
         $_SESSION['user'] = $myusername;
		 header("location: index.php");
      }
      else {
         echo '<script>alert("Id Atau Kata Laluan Tidak Sah") </script>' ;
      }
   }
?>
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
		echo '<script>alert("Ahli sudah didaftarkan. Sila log masuk") </script>' ;		
	  }
	  else {
		echo '<script>alert("Ralat! Masalah telah berlaku") </script>' ;
	  }
   }
?>