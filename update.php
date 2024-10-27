<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM game WHERE id = $id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $date = $_POST['date'];

    $sql = "UPDATE game SET name='$name', genre='$genre', date=$date WHERE id=$id";
    $conn->query($sql);
    header("Location: wala.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="post">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
        <label>Genre:</label><br>
        <input type="text" name="genre" value="<?php echo $user['genre']; ?>" required><br>
        <label>Date:</label><br>
        <input type="number" name="date" value="<?php echo $user['date']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>