<?php
// needed to load the database stuff variables
require_once("../php/connect.php");

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    if (!$conn) {
        var_dump($_ENV); // Check if .env is loaded
        die("Database connection is not established.");
    }

    // Get and sanitize form data
    $game_title = htmlspecialchars($_POST['game_title']);
    $winner = htmlspecialchars($_POST['winner']);
    $score = htmlspecialchars($_POST['score']);
    $match_type = htmlspecialchars($_POST['match_type']);
    $match_date = htmlspecialchars($_POST['match_date']);

    try {
        // Prepare SQL statement and execute
        $stmt = $conn->prepare("INSERT INTO MatchResults (game_title, winner, score, match_type, match_date) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$game_title, $winner, $score, $match_type, $match_date]);

        // Redirect so it doesnt re-sends the data on page reload
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
        <h2>Admin Results</h2>

        <!-- Contact Form -->
        <form action="index.php?page=admin/adminResults" method="POST" class="contactus-form">

            <!-- Game Title Section -->
            <div>
                <label for="game_title">Game Title</label>
                <input type="text" id="game_title" name="game_title" placeholder="The Game Title" required>
            </div>

            <!-- Winner Section -->
            <div>
                <label for="winner">Winner?</label>
                <input type="text" id="winner" name="winner" placeholder="Who won?" required>
            </div>


            <!-- Score Section -->
            <div>
                <label for="score">Match Score</label>
                <input type="text" id="score" name="score" placeholder="?-?" required>
            </div>

            <!-- Match Type Section -->
            <div>
                <label for="match_type">Match Type</label>
                <input type="text" id="match_type" name="match_type" placeholder="Grand Chap?" required maxlength="30">
            </div>

            <!-- Date Section -->
            <div>
                <label for="match_date">Match Date</label>
                <input type="date" id="match_date" name="match_date" required>
            </div>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
        </form>
    </div>
</section>