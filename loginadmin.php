<!DOCTYPE html>
<html>
<head>
<title>Kelab Muzik</title>
<link rel="stylesheet" href="csslogin2.css">

</head>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="post">
			<h1>Pendaftaran Baharu</h1>
			<input type="text" name="user" maxlength="12"  minlength="12" required placeholder="ID Admin" />
			<input type="text" name="name" placeholder="Nama Admin" />
			<input type="password" name="pass" placeholder="Kata Laluan" />
			<button name="reg">Daftar Masuk</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="post">
			<h1>Log Masuk Admin</h1>
			<input type="text" name="user" maxlength="12"  minlength="12" required placeholder="ID Admin" />
			<input type="password" name="pass" placeholder="Kata Laluan" />
			<a href="login.php">Anda Ahli? Sila Log Masuk Disini.</a>
			<button name="login">Log Masuk</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
			    <h1>Selamat Datang ke Kelab Muzik!</h1>
				<p>Sila masukkan keterangan diri anda.</p>
				<button class="ghost" id="signIn">Log Masuk</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Selamat Kembali ke Kelab Muzik!</h1>
				<p>Sila log masuk menggunakan ID Admin dan Kata laluan anda.</p>
				<button class="ghost" id="signUp">Daftar Masuk</button>
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
      $sql = "SELECT idadmin FROM admin WHERE idadmin = '$myusername' and kladmin = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = isset($row['active']);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         $_SESSION['user'] = $myusername;
         
         header("location: admin.php");
      }
      else {
         echo '<script>alert("Username Atau Kata Laluan Tidak Sah") </script>' ;
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
      $sql ="INSERT INTO `admin`( `idadmin`, `namadmin`,`kladmin`) VALUES ('$idp','$name','$pass')";
	  if(mysqli_query($con,$sql))
	  {
		echo '<script>alert("Admin sudah didaftarkan. Sila log masuk") </script>' ;		
	  }
	  else {
		echo '<script>alert("Ralat! Masalah telah berlaku") </script>' ;
	  }
   }
?>