<!DOCTYPE html>
<html>
<head>
    <title>Rumah</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="index3.css">
    <script src="offlinePopup.js"></script>
    <script src="hi.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="scroll.js"></script>
</head>
<body>

<!-- Top navigation bar -->
<div class="w3-top" style="font-family: Times New Roman, Times, serif; font-size: large;">
    <div class="w3-bar w3-black w3-wide w3-padding w3-card">
        <a href="#home" class="w3-bar-item w3-button"><b>SMKS2</b> Muzik</a>
        <div class="w3-right w3-hide-small">
            <a href="#projects" class="w3-bar-item w3-button">Program</a>
            <a href="#about" class="w3-bar-item w3-button">Tentang Kami</a>
            <a href="laporan.php" class="w3-bar-item w3-button">Laporan</a>
            <!-- Button to toggle between admin and member (ahli) login -->
            <button onclick="toggleLogin()" class="w3-bar-item w3-button">Log Masuk</button>
        </div>
    </div>
</div>

<!-- Login Pop-up -->
<div id="loginPopup" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" style="max-width: 400px;">
        <header class="w3-container w3-black">
            <span onclick="closeLogin()" class="w3-button w3-display-topright">&times;</span>
            <h2 id="loginTitle">Log Masuk Admin</h2>
        </header>
        <div class="w3-container">
            <!-- Admin and member (ahli) sign-in forms -->
            <form id="adminForm" action="admin_login.php" method="post">
                <label for="admin_username">Username:</label>
                <input type="text" id="admin_username" name="admin_username"><br><br>
                <label for="admin_password">Password:</label>
                <input type="password" id="admin_password" name="admin_password"><br><br>
                <input type="submit" value="Log Masuk">
            </form>

            <form id="memberForm" action="member_login.php" method="post" style="display: none;">
                <label for="member_username">Username:</label>
                <input type="text" id="member_username" name="member_username"><br><br>
                <label for="member_password">Password:</label>
                <input type="password" id="member_password" name="member_password"><br><br>
                <input type="submit" value="Log Masuk">
            </form>
        </div>
    </div>
</div>

<!-- Rest of your HTML content -->

<script>
// Function to toggle between admin and member (ahli) login
function toggleLogin() {
    var loginPopup = document.getElementById('loginPopup');
    var loginTitle = document.getElementById('loginTitle');
    var adminForm = document.getElementById('adminForm');
    var memberForm = document.getElementById('memberForm');

    if (loginTitle.textContent === 'Log Masuk Admin') {
        // Change title to "Log Masuk Ahli"
        loginTitle.textContent = 'Log Masuk Ahli';
        // Hide admin form, show member (ahli) form
        adminForm.style.display = 'none';
        memberForm.style.display = 'block';
    } else {
        // Change title to "Log Masuk Admin"
        loginTitle.textContent = 'Log Masuk Admin';
        // Hide member (ahli) form, show admin form
        memberForm.style.display = 'none';
        adminForm.style.display = 'block';
    }

    // Open the login pop-up
    loginPopup.style.display = 'block';
}

// Function to close the login pop-up
function closeLogin() {
    var loginPopup = document.getElementById('loginPopup');
    loginPopup.style.display = 'none';
}
</script>

</body>
</html>
