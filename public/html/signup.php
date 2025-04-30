<!-- Sign Up Section -->
<section class="signup">
    <div class="signup-container">
        <h2>Sign Up</h2>
<!--    chatgpt helped me with this onsubmit thing cuz  i didnt how to return the fucking function properly    -->
        <form action="index.php?page=signup" method="POST" class="signup-form" onsubmit="return validatePasswords()">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" required aria-required="true">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required aria-required="true">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required aria-required="true"
                       pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
                <small class="password-hint">Password must be at least 8 characters long with uppercase, lowercase, number, and special character.</small>
            </div>
            <div class="form-group">
                <label for="password_confirm">Confirm Password</label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirm Password" required aria-required="true">
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</section>

<script>
    function validatePasswords() {
        let password = document.getElementById("password").value;
        let passwordConfirm = document.getElementById("password_confirm").value;

        if (password !== passwordConfirm) {
            alert("Passwords do not match. Please try again.");
            return false; // Bad password no no
        }
        return true; // Good password yes yes
    }
</script>
