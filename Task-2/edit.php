<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM posts WHERE id = $id");
$post = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("UPDATE posts SET title=?, content=? WHERE id=?");
    $stmt->bind_param("ssi", $title, $content, $id);
    $stmt->execute();

    header("Location: dashboard.php");
    exit();
}
?>
<link rel="stylesheet" type="text/css" href="styles.css">

<form method="POST">
    Title: <input type="text" name="title" value="<?= $post['title'] ?>" required><br>
    Content:<br>
    <textarea name="content" required><?= $post['content'] ?></textarea><br>
    <button type="submit">Update</button>
</form>
