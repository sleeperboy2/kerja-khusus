<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('db.php');
    session_start();
    $user = $_SESSION['user']; 
    $sql = "SELECT * FROM aktiviti";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelab Bahasa Tamil</title>
    <link rel="stylesheet" href="csslogin4.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html, body, h1, h2, h3, h4 { font-family: "Lato", sans-serif }
        .mySlides { display: none }
        .w3-tag, .fa { cursor: pointer }
        .w3-tag { height: 15px; width: 15px; padding: 0; margin-top: 6px }

        table { width: 100%; }
        th { border: 1.5px solid; border-color: black; background: linear-gradient(to right, #f5af19, #f12711); color: black; font-size: large; }
        tr { border: 1.5px solid; }
        td { border: 1.5px solid; background: linear-gradient(to right, #FFFFFF, #FFEFBA); color: #7F5539; text-align: center; transition-duration: 0.4s; cursor: pointer; }
        td:hover { background: linear-gradient(to right, #93291E, #ED213A); color: white; }
        th:hover { background: linear-gradient(to right, #93291E, #ED213A); color: white; }
        .form-container { height: 100%; transition: all 0.6s ease-in-out; width: 50%; align-items: center; top: 50%; left: 50%; }
        button { border-radius: 20px; border: 1px solid #B08968; background-color: #B08968; color: #FFFFFF; font-size: 12px; font-weight: bold; padding: 2px 45px; letter-spacing: 1px; text-transform: uppercase; transition: transform 80ms ease-in; width: 50%; }
        button:active { transform: scale(0.95); }
        button:focus { outline: none; }
        button.ghost { background-color: transparent; border-color: #B08968; }
        input { background-color: #eee; border: none; padding: 12px 20px; width: 50%; }
        
        .form-control {
            position: relative;
            margin: 20px 0 40px;
            width: 190px;
            float: left;
        padding: 10px;
        position: relative;
        display: flex;
        margin-top: 30px;
        flex-wrap: wrap;
        gap: 40px;
        }
        .form-control input {
            background-color: transparent;
            border: 0;
            border-bottom: 2px #fff solid;
            display: block;
            width: 100%;
            padding: 15px 0;
            font-size: 18px;
            color: #fff;
        }
        .form-control input:focus, .form-control input:valid {
            outline: 0;
            border-bottom-color: lightblue;
        }
        .form-control label {
            position: absolute;
            top: 15px;
            left: 0;
            pointer-events: none;
        }
        .form-control label span {
            display: inline-block;
            font-size: 18px;
            min-width: 5px;
            color: #fff;
            transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        .form-control input:focus + label span, .form-control input:valid + label span {
            color: lightblue;
            transform: translateY(-30px);
        }

        body {
            background-image: url(https://i.pinimg.com/originals/fa/c0/5c/fac05c110c458e9bab3a3248bfb3c376.jpg);
            color: white;
        }

        
    </style>
</head>
<body>
    <!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-wide w3-padding-large w3-card">
        <a href="admin.php" class="w3-bar-item w3-padding-small w3-button"><b>SMKS2 </b>KELAB BAHASA TAMIL</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right">
            <a href="adminaction.php" class="w3-button w3-padding-small">Admin</a>
            <a href="ahliaction.php" class="w3-button w3-padding-small">Ahli</a>
            <a href="aktiviti.php" class="w3-button w3-padding-small">Aktiviti</a>
            <a href="kehadiran.php" class="w3-button w3-padding-small">Rekod Kehadiran</a>
            <a href="laporanadmin.php" class="w3-button w3-padding-small">Carian</a>
            <a href="logout.php" class="w3-button w3-padding-small">Log Keluar</a>
        </div>
    </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px; margin-top:80px; margin-bottom:80px">
    <div class="w3-panel">
        <h1><b>Senarai Admin</b></h1>
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
                            include('db.php');
                            $sql = "SELECT * FROM admin";
                            $re = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($re)) {
                                echo "<tr class='gradeC'>
                                        <td>" . $row['idadmin'] . "</td>
                                        <td>" . $row['namadmin'] . "</td>
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
                <h1>Pendaftaran Baharu</h1>
                <div class="form-control">
                    <input type="text" minlength="12" maxlength="12" required name="user">
                    <label>
                        <span style="transition-delay:0ms">I</span><span style="transition-delay:50ms">D</span><span style="transition-delay:100ms"> </span><span style="transition-delay:150ms">A</span><span style="transition-delay:200ms">d</span><span style="transition-delay:250ms">m</span><span style="transition-delay:300ms">i</span><span style="transition-delay:350ms">n</span>
                    </label>
                </div>
                <div class="form-control">
                    <input type="text" name="name" required>
                    <label>
                        <span style="transition-delay:0ms">N</span><span style="transition-delay:50ms">a</span><span style="transition-delay:100ms">m</span><span style="transition-delay:150ms">a</span><span style="transition-delay:200ms"> </span><span style="transition-delay:250ms">A</span><span style="transition-delay:300ms">d</span><span style="transition-delay:350ms">m</span><span style="transition-delay:400ms">i</span><span style="transition-delay:450ms">n</span>
                    </label>
                </div>
                <div class="form-control">
                <input type="password" name="pass" required>
                    <label>
                    <span style="transition-delay:0ms">K</span><span style="transition-delay:50ms">a</span><span style="transition-delay:100ms">t</span><span style="transition-delay:150ms">a</span><span style="transition-delay:200ms"> </span><span style="transition-delay:250ms">L</span><span style="transition-delay:300ms">a</span><span style="transition-delay:350ms">l</span><span style="transition-delay:400ms">u</span><span style="transition-delay:450ms">a</span><span style="transition-delay:500ms">n</span>
                    </label>
                </div>
                <button name="reg">Daftar Masuk</button>
            </form>
        </div>

        <div class="form-container sign-up-container">
            <form action="#" method="post">

                <h1>Delete Admin</h1>
                <div class="form-control">
                    <input type="text" name="delete" required>
                    <label>
                        <span style="transition-delay:0ms">I</span><span style="transition-delay:50ms">D</span><span style="transition-delay:100ms"> </span><span style="transition-delay:150ms">A</span><span style="transition-delay:200ms">d</span><span style="transition-delay:250ms">m</span><span style="transition-delay:300ms">i</span><span style="transition-delay:350ms">n</span>
                    </label>
                </div>
                <button name="del">Delete</button>
            </form>
        </div>
        <?php
        include('db.php');
        if (isset($_POST['reg'])) {
            // username and password sent from form 
            $idp = mysqli_real_escape_string($con, $_POST['user']);
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $pass = mysqli_real_escape_string($con, $_POST['pass']);
            $sql = "INSERT INTO admin (idadmin, namadmin, kladmin) VALUES ('$idp', '$name', '$pass')";
            if (mysqli_query($con, $sql)) {
                echo '<script>alert("Admin sudah didaftarkan. Sila refresh page ini.") </script>';
            } else {
                echo '<script>alert("Ralat! Masalah telah berlaku") </script>';
            }
        }
        if (isset($_POST['del'])) {
            $idp = mysqli_real_escape_string($con, $_POST['delete']);
            $sql = "DELETE FROM admin WHERE idadmin = '$idp'";
            if (mysqli_query($con, $sql)) {
                echo '<script>alert("Admin sudah Didelete.  Sila refresh page ini.") </script>';
            } else {
                echo '<script>alert("Ralat! Masalah telah berlaku") </script>';
            }
        }
        ?>
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
    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-white";
}
</script>

</body>
</html>