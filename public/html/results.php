<?php
require_once("../php/connect.php");

global $conn;



try {
// Get all contact messages
$stmt = $conn->query("SELECT * FROM MatchResults ORDER BY result_date DESC");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);




} catch (PDOException $e) {
    error_log($e->getMessage());
    die("DB ERROR: " . $e->getMessage());
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Contact Dashboard</title>
    <link rel="stylesheet" href="../css/admincontact.css">
</head>
<body>
<div class="admincontact main-content">
    <h1>📬 Admin Contact Messages</h1>
    <table>
        <thead>
        <tr>
            <th>Results ID</th>
            <th>Game Title</th>
            <th>BLD Team</th>
            <th>Enemy Team</th>
            <th>BLD Score</th>
            <th>Enemy Score</th>
            <th>Type</th>
            <th>Result</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($results as $result): ?>
            <tr>
                <td><?php echo htmlspecialchars($result['result_id']); ?></td>
                <td><?php echo htmlspecialchars($result['game_title']); ?></td>
                <td><?php echo htmlspecialchars($result['our_team_name']); ?></td>
                <td><?php echo htmlspecialchars($result['enemy_team_name']); ?></td>
                <td><?php echo htmlspecialchars($result['our_score']); ?></td>
                <td><?php echo htmlspecialchars($result['enemy_score']); ?></td>
                <td><?php echo htmlspecialchars($result['match_type']); ?></td>
                <td><?php echo htmlspecialchars($result['match_result']); ?></td>
                <td><?php echo htmlspecialchars($result['match_date']); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>