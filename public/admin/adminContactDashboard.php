<?php
// needed to load the database stuff variables
require_once("../php/connect.php");

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$dbname = $_ENV['DB_NAME'];
$port = $_ENV['DB_PORT'];

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Handle deletion
    if (isset($_POST['delete'])) {
        $contactus_id = $_POST['contactus_id'];

        // Delete the contact record by its ID
        $deleteStmt = $conn->prepare("DELETE FROM ContactUS WHERE contactus_id = ?");
        $deleteStmt->execute([$contactus_id]);

        // After deletion, reload the page to show updated data
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();
    }

    // Get all contact messages
    $stmt = $conn->query("SELECT * FROM ContactUS ORDER BY date DESC");
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
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
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?php echo htmlspecialchars($contact['contactus_id']); ?></td>
                <td><?php echo htmlspecialchars($contact['firstname']); ?></td>
                <td><?php echo htmlspecialchars($contact['lastname']); ?></td>
                <td><?php echo htmlspecialchars($contact['email']); ?></td>
                <td><?php echo htmlspecialchars($contact['phonenumber']); ?></td>
                <td><?php echo htmlspecialchars($contact['subject']); ?></td>
                <td><?php echo htmlspecialchars($contact['message']); ?></td>
                <td><?php echo htmlspecialchars($contact['date']); ?></td>
                <td>
                    <!-- Delete button directly in the table -->
                    <form class="delete-form" action="" method="POST">
                        <input type="hidden" name="contactus_id" value="<?php echo $contact['contactus_id']; ?>">
                        <input type="hidden" name="delete" value="1">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
