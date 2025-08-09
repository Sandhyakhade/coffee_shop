document.getElementById("registerButton").addEventListener("click", function () {
    const username = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const gender = document.getElementById("gender").value;
    const dob = document.getElementById("dob").value;

    const messageDiv = document.getElementById("message");

    // Validate form inputs
    if (!username || !email || !password || !confirmPassword || !gender || !dob) {
        showMessage("Please fill out all fields.", "error");
        return;
    }

    if (password !== confirmPassword) {
        showMessage("Passwords do not match.", "error");
        return;
    }

    if (password.length < 6) {
        showMessage("Password must be at least 6 characters long.", "error");
        return;
    }

    // Simulate successful registration
    showMessage("Registration successful!", "success");
});

function showMessage(message, type) {
    const messageDiv = document.getElementById("message");
    messageDiv.textContent = message;
    messageDiv.className = type === "success" ? "success" : "error";
    messageDiv.classList.remove("hidden");
}
