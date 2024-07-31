<!DOCTYPE html>
<html>
<?php
include('db.php');
?>
<head>
<title>Maklumat</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="action.css">
<link rel="stylesheet" href="lost.css">
<script src="offlinePopup.js"></script>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card" style="font-family: Times New Roman, Times, serif;
    font-size: larger;">
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
    font-size: 40px;"><b>Maklumat</b></h1>
    <p>Maklumat dalam sistem tersebut</p>
  </div>

 
  <?php
include('db.php');

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

?>
</form>
<div class="table-responsive"  style="font-family: Times New Roman, Times, serif;
    font-size: large;">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th style="width: 11%;">ID Ahli</th>
                <th style="width: 11%;">ID Aktiviti</th>
                <th style="width: 11%;">Kehadiran</th>
                <th style="width: 11%;">Disahkan Oleh</th>
                <th style="width: 26%;">Nama Ahli</th>
                <th style="width: 26%;">Kelas</th>
                <th style="width: 26%;">Jantina</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql_ahli = "SELECT ahli.idahli, ahli.namaahli, ahli.kelas, ahli.jantina, kehadiran.idaktiviti, kehadiran.hadir, kehadiran.idadmin 
                         FROM ahli 
                         LEFT JOIN kehadiran ON ahli.idahli = kehadiran.idahli
                         WHERE (ahli.idahli LIKE '%$searchTerm%' 
                         OR ahli.namaahli LIKE '%$searchTerm%' 
                         OR ahli.jantina LIKE '%$searchTerm%'
                         OR ahli.kelas LIKE '%$searchTerm%'
                         OR kehadiran.idaktiviti LIKE '%$searchTerm%'
                         OR kehadiran.hadir LIKE '%$searchTerm%'
                         OR kehadiran.idadmin LIKE '%$searchTerm%')
                         AND kehadiran.idaktiviti IS NOT NULL";

            $result_ahli_kehadiran = mysqli_query($con, $sql_ahli);

           
            echo "<table class='your-table-class'>";

            while ($row = mysqli_fetch_assoc($result_ahli_kehadiran)) {
                echo "<tr class='gradeC'>
                    <td style='width: 11%;'>" . $row['idahli'] . "</td>
                    <td style='width: 11%;'>" . $row['idaktiviti'] . "</td>
                    <td style='width: 11%;'>" . $row['hadir'] . "</td> 
                    <td style='width: 11%;'>" . $row['idadmin'] . "</td>
                    <td style='width: 26%;'>" . $row['namaahli'] . "</td>
                    <td style='width: 26%;'>" . $row['kelas'] . "</td>
                    <td style='width: 26%;'>" . $row['jantina'] . "</td>
                </tr>";
            }

            echo "</table>";
            ?>
        </tbody>
    </table>
</div>

        </tbody>
    </table>
</div>






                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
             
                                    </tbody>
                                </table>
                            </div>                          
                        </div>
                    </div>
 


</body>
</html>

