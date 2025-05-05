<?php
require_once('.././php/connect.php');

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    if (!$conn) {
        var_dump($_ENV); // Check if .env is loaded
        die("Database connection is not established.");
    }

    // Get and sanitize form data
    $firstName = htmlspecialchars($_POST['first-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);
    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    try {
        // Prepare SQL statement and execute
        $stmt = $conn->prepare("INSERT INTO ContactUS (firstname, lastname, email, phonenumber, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$firstName, $lastName, $email, $phonenumber, $subject, $message]);

        // Redirect to avoid form re-submission on page reload
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!-- Contact Us Section -->
<section class="contactus">
    <div class="contactus-container">
        <h2>Contact Us</h2>

        <!-- Contact Form -->
        <form action="index.php?page=contactus" method="POST" class="contactus-form" onsubmit="return contactUsAlert()">
            <!-- Name Section -->
            <div>
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" placeholder="Your first name" required>
            </div>

            <div>
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" placeholder="Your last name" required>
            </div>

            <!-- Email Section -->
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="email@gmail.com" required>
            </div>

            <!-- Phone Section -->
                        <div>
                <label for="phonenumber">Phone Number</label>
                <input type="phonenumber" id="phonenumber" name="phonenumber" placeholder="06 12345678" required maxlength="10">
            </div>

            <!-- Subject Section -->
            <div>
                <label for="subject">Subject</label>
                <select id="subject" name="subject" required>
                    <option value="General Inquiry">General Inquiry</option>
                    <option value="Partnerships">Partnerships</option>
                    <option value="Team Recruitment">Team Recruitment</option>
                    <option value="Event Inquiry">Event Inquiry</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <!-- Message Section -->
            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Type your message here..." required maxlength="1500"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
            <p>We usually take 3-6 business days to respond!</p>
        </form>
    </div>
</section>

<script src=".././js/contactUsAlert.js"></script>
