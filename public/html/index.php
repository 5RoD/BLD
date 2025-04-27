<?php
// Loads the .env file and then connects to mysql
require_once('../php/init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLD e-Sports Team</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <div class="logo">
        <h1>BLD</h1>
        <p>Counter-strike Team</p>
    </div>
    <nav>
        <div class="nav-item"><a href="#">Home</a></div>
        <div class="nav-item"><a href="#">Team</a></div>
        <div class="nav-item"><a href="#">Matches</a></div>
        <div class="nav-item"><a href="#">Shop</a></div>
        <div class="nav-item"><a href="#">Socials</a></div>
    </nav>
</header>

<main>
    <!-- Join Section -->
    <section class="join">
        <div class="join-content">
            <h2>Welcome to BLD e-Sports</h2>
            <p>Follow the journey of the best Counter-strike team!</p>
            <a href="#" class="btn-main">Join Us</a>
        </div>
    </section>

    <!-- Team Members Section -->
    <section class="team-members">
        <h3>Meet Our Players</h3>
        <div class="members">
            <div class="member">
                <img src="../images/player1.jpg" alt="Player 1">
                <h4>Player 1</h4>
                <p>Role: IGL</p>
            </div>
            <div class="member">
                <img src="../images/player2.jpg" alt="Player 2">
                <h4>Player 2</h4>
                <p>Role: Entry</p>
            </div>
            <div class="member">
                <img src="../images/player3.jpg" alt="Player 3">
                <h4>Player 3</h4>
                <p>Role: Support</p>
            </div>
        </div>
    </section>

    <!-- Latest Match Section -->
    <section class="latest-match">
        <h3>Latest Match Highlights</h3>
        <p>Check out the intense action of our latest Counter-strike match!</p>
        <a href="#" class="btn-main">Watch Now</a>
    </section>
</main>

<footer>
    <p class="disclaimer">© 2025 BLD. All rights reserved.</p>
    <div class="socials">
        <a href="#">Facebook</a> |
        <a href="#">Twitter</a> |
        <a href="#">Instagram</a>
    </div>
</footer>
</body>
</html>
