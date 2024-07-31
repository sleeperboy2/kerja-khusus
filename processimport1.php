<?php
	session_start();
	//connection
	$conn = new mysqli('localhost', 'root', '', 'kehadiran');
	if(isset($_POST['import'])){
		//check if input file is empty
		if(!empty($_FILES['file']['name'])){
			$filename = $_FILES['file']['tmp_name'];
			$fileinfo = pathinfo($_FILES['file']['name']);

			//check file extension
			if(strtolower($fileinfo['extension']) == 'csv'){
				//check if file contains data
				if($_FILES['file']['size'] > 0){
					$file = fopen($filename, 'r');
					$fk = "SET FOREIGN_KEY_CHECKS = 0;";
					if(mysqli_query($conn,$fk)){
					}
					else{
						echo '<script>alert("Maaf ! Sila Semak Sistem") </script>' ;
						echo "Ralat : $sql<br>".
						mysqli_error($conn) ; 
					}
					while(($impData = fgetcsv($file, 1000, ',')) !== FALSE){
						$sql = "INSERT INTO `ahli`( `idahli`, `namaahli`,`klahli`,`jantina`,`kelas`)
								VALUES ('".$impData[0]."', '".$impData[1]."', '".$impData[2]."','".$impData[3]."','".$impData[4]."')";
						$query = $conn->query($sql);

						if($query){
							$_SESSION['message'] = "<script type='text/javascript'> alert('Data berjaya dimuatnaik')</script>";
						}
						else{
							$_SESSION['message'] = "<script type='text/javascript'> alert('Data gagal dimuatnaik ')</script>";
						}
					}
					header('location: ahliaction.php');
					
				}
				else{
					$_SESSION['message'] = "<script type='text/javascript'> alert('Fail mempunyai data kosong')</script>";
					header('location: ahliaction.php');
				}
			}
			else{
				$_SESSION['message'] = "<script type='text/javascript'> alert('Sila muatnaik fail .CSV sahaja')</script>";
				header('location: ahliaction.php');
			}
		}
		else{
			$_SESSION['message'] = "<script type='text/javascript'> alert('Fail kosong')</script>";
			header('location: ahliaction.php');
		}
	}
	else{
		$_SESSION['message'] = "<script type='text/javascript'> alert('Sila muatnaik fail dahulu')</script>";
		header('location: ahliaction.php');
	} 
 
?>