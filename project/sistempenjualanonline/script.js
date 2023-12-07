document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();

    // Get user input
    var email = document.getElementById("login-email").value;
    var password = document.getElementById("login-password").value;

    // Perform login logic (You need to implement server-side logic for authentication)

    // For demonstration purposes, alert a message
    alert("Login attempt with Email: " + email + " and Password: " + password);
});

