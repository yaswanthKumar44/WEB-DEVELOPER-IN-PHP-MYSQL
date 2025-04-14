<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
?>
<link rel="stylesheet" type="text/css" href="styles.css">
<h1>Welcome to the Dashboard</h1>
<a href="create.php">Add New Post</a> | <a href="logout.php">Logout</a>
<h2>All Posts</h2>

<?php while ($row = $result->fetch_assoc()): ?>
    <h3><?= $row['title'] ?></h3>
    <p><?= $row['content'] ?></p>
    <small>Posted on: <?= $row['created_at'] ?></small><br>
    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
    <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
    <hr>
<?php endwhile; ?>
