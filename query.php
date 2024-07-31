<!DOCTYPE html>
<html>
<?php
include('db.php');
?>
<head>
<title>laporan</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="gg.css">
<link rel="stylesheet" href="lost.css">
<script src="offlinePopup.js"></script>
<style>
  @media print {
    body {
      display: flex;
      justify-content: flex-start; /* Updated to move the content to the left */
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: white;
    }

    .table-responsive {
      max-width: 100%;
      margin-top: 20px;
    }

    .table-content table {
      width: 100%;
      border-collapse: collapse;
    }

    .table-content th, .table-content td {
      padding: 8px;
      width: 100px;
      text-align: center;
      vertical-align: middle;
      background-color: white;
      color: black;
    }

    .table-content th {
      padding-left: 15px;
      white-space: nowrap;
    }

    .table-content td {
      word-wrap: break-word;
      white-space: normal;
    }

    .logo {
      display: none;
    }
    th{
      background-color: white;
      color: black;
      font-size: large;
      color: darkcyangrey;
      font-family: "Times New Roman", Times, serif;
    font-size: large;
  }
  
  td{

      background-color:white;
      color: black;
      text-align: center;
      font-family: "Times New Roman", Times, serif;
    font-size: large;
  }
  
  .w3-top, .w3-panel, form {
    display: none;
  }

  .table-responsive {
    position: absolute;
    top: 0;
    left: 0; 
  }
  }
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top" style="font-family: Times New Roman, Times, serif;
    font-size: large;">
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
    font-size: 40px;"><b>Carian</b></h1>
    <p>Sila cari ahli di sini dan cetak laporan ahli</p>
  </div>
  
  <?php
    include('db.php');
    $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
  ?>
      <?php
    include('db.php');
    $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
    $selectedAktiviti = isset($_GET['aktiviti']) ? $_GET['aktiviti'] : '';
    ?>

    <form method="GET" action="" style="font-family: Times New Roman, Times, serif; font-size: large; margin-bottom: 25px;">
        <input type="text" name="search" id="search" placeholder="Carian..." value="<?php echo htmlspecialchars($searchTerm); ?>">
        <select name="aktiviti" id="aktiviti" style="font-family: Times New Roman, Times, serif; font-size: large;">
            <option value="">Pilih Aktiviti</option>
            <?php
            $aktivitiQuery = "SELECT DISTINCT idaktiviti FROM kehadiran";
            $aktivitiResult = mysqli_query($con, $aktivitiQuery);
            while ($aktivitiRow = mysqli_fetch_assoc($aktivitiResult)) {
                $selected = ($aktivitiRow['idaktiviti'] == $selectedAktiviti) ? 'selected' : '';
                echo "<option value='" . $aktivitiRow['idaktiviti'] . "' $selected>" . $aktivitiRow['idaktiviti'] . "</option>";
            }
            ?>
        </select>
        <button type="submit" style="font-family: Times New Roman, Times, serif; font-size: large;">Cari</button>
        <button onclick="printTable()">Cetak Laporan</button>
        <p>Ini ialah paparan laporan</p>
    </form>

    <div class="table-responsive" style="font-family: Times New Roman, Times, serif;font-size: large;">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th style="width: 110px;">ID Ahli</th>
                    <th style="width: 90px;">ID Aktiviti</th>
                    <th style="width: 90px;">Kehadiran</th>
                    <th style="width: 90px;">Disahkan Oleh</th>
                    <th style="width: 150px;">Nama Ahli</th>
                    <th style="width: 100px;">Kelas</th>
                    <th style="width: 60px;">Jantina</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // ini adalah paparan carian ahli menggunakan idahli,jantina dan idaktiviti
                // menggunakan select dan left JOIN untuk mendapatkan data dari database kehadiran.
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

                // apply filter if aktiviti is selected
                if (!empty($selectedAktiviti)) {
                    $sql_ahli .= " AND kehadiran.idaktiviti = '$selectedAktiviti'";
                }

                $result_ahli_kehadiran = mysqli_query($con, $sql_ahli);

                echo "<table class='your-table-class'>";

                while ($row = mysqli_fetch_assoc($result_ahli_kehadiran)) {
                    echo "<tr class='gradeC'>
                        <td style='width: 110px;'>" . $row['idahli'] . "</td>
                        <td style='width: 90px;'>" . $row['idaktiviti'] . "</td>
                        <td style='width: 90px;'>" . $row['hadir'] . "</td> 
                        <td style='width: 90px;'>" . $row['idadmin'] . "</td>
                        <td style='width: 150px;'>" . $row['namaahli'] . "</td>
                        <td style='width: 100px;'>" . $row['kelas'] . "</td>
                        <td style='width: 60px;'>" . $row['jantina'] . "</td>
                    </tr>";
                }



                echo "</table>";
                ?>
            </tbody>
        </table>
    </div>
</div>
 

      </tbody>
    </table>
  </div>
</div>
</body>
</html>

<script>
  function printTable() {
    document.body.style.backgroundColor = 'white';
    var elementsToHide = document.querySelectorAll('.w3-top, .w3-panel, form');
    elementsToHide.forEach(function (element) {
      element.style.display = 'none';
    });
    window.print();
    elementsToHide.forEach(function (element) {
      element.style.display = 'block';
    });
    document.body.style.backgroundColor = '';
  }
</script>