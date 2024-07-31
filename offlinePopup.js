// Function to check internet connection
function checkInternetConnection() {
    return navigator.onLine; // Returns true if online, false if offline
}

// Function to display the connection lost popup
function displayConnectionLostPopup() {
    if (!checkInternetConnection()) {
        // If there's no internet connection, display a popup and overlay
        var overlay = document.createElement('div');
        overlay.className = 'overlay';
        document.body.appendChild(overlay);

        var popup = document.createElement('div');
        popup.className = 'connection-lost-popup';
        popup.innerHTML = `
            <h1>Tiada Internet</h1>
            <div aria-label="Orange and tan hamster running in a metal wheel" role="img" class="wheel-and-hamster">
            <div class="wheel"></div>
            <div class="hamster">
                <div class="hamster__body">
                    <div class="hamster__head">
                        <div class="hamster__ear"></div>
                        <div class="hamster__eye"></div>
                        <div class="hamster__nose"></div>
                    </div>
                    <div class="hamster__limb hamster__limb--fr"></div>
                    <div class="hamster__limb hamster__limb--fl"></div>
                    <div class="hamster__limb hamster__limb--br"></div>
                    <div class="hamster__limb hamster__limb--bl"></div>
                    <div class="hamster__tail"></div>
                </div>
            </div>
            <div class="spoke"></div>
        </div>
            <p>Sila semak sambungan internet anda dan cuba lagi kemudian.</p>
        `;
        document.body.appendChild(popup);

        // Check for internet connection every 5 seconds
        setInterval(function() {
            if (checkInternetConnection()) {
                // If internet connection is restored, reload the page
                window.location.reload();
            }
        }, 5000); // Adjust the interval as needed (in milliseconds)
    }
}

// Function to reload the page
function reloadPage() {
    window.location.reload();
}

// Call the function to display the popup when the page loads
window.addEventListener('load', displayConnectionLostPopup);
