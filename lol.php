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
/* korang style search bar kat sini kalau ada masalah pm saya @sleeper_boy2 */
      input[type="text"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
        width: 200px;
        box-sizing: border-box; 
    }

    input[type="submit"] {
        padding: 8px 15px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
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
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
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
    <p>tulis la sikit</p>
  </div>
  <form method="GET" action="">
    <!-- korang punya search bar-->
                <input type="text" name="search" placeholder="carian..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                <button class="btn" type="submit" value="Search">Cari</button><br> 
            </form>
  
  
  <!-- Grid -->
  <div class="w3-row w3-container">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Ahli</th>
                                            <th>jantina</th>
                                            <th>ID Aktiviti</th>
											                      <th>Kehadiran</th>
                                            <th>Disahkan Oleh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
							
                                    <?php
                        include('db.php');
                        session_start();
                        $user = $_SESSION['user'];

                        
                        if (isset($_GET['search'])) {
                            $searchTerm = $_GET['search'];
                            $sql = "SELECT * FROM kehadiran 
                                    WHERE idahli LIKE '%$searchTerm%' 
                                    OR idaktiviti LIKE '%$searchTerm%' 
                                    OR hadir LIKE '%$searchTerm%'
                                    OR jantina LIKE '%$searchTerm%'
                                    OR idadmin LIKE '%$searchTerm%'";
                                   
                        } else {
                            $sql = "SELECT * FROM kehadiran";
                        }

                        $re = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($re)) {
                            echo "<tr class='gradeC'>
                                    <td>" . $row['idahli'] . "</td>
                                    <td>" . $row['jantina'] . "</td>
                                    <td>" . $row['idaktiviti'] . "</td>
                                    <td>" . $row['hadir'] . "</td> 
                                    <td>" . $row['idadmin'] . "</td> 
                                </tr>";
                        }
                        ?>


                                        
                                    </tbody>
                                </table>
                            </div>
                            <button onClick="window.print()">Cetak</button>
                            
                        </div>
                    </div>
    


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