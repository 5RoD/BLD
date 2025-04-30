function validatePasswords() {
    const password = document.getElementById("password").value;
    const passwordConfirm = document.getElementById("password_confirm").value;

    if (password !== passwordConfirm) {
        alert("Passwords do not match. Please try again.");
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}