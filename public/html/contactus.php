<!-- Contact Us Up Section -->
<section class="contactus">
    <div class="contactus-container">
        <h2>Contact Us</h2>

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
                <textarea id="message" name="message" placeholder="Type your message here..." required></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
            <p>We usually take 3-6 business days to respond!</p>
        </form>
    </div>
</section>
<script src=".././js/contactUsAlert.js">
    handl
</script>