<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST["name"];
    $genre = $_POST ["genre"];
    $date = $_POST ["date"];

    $sql = "INSERT into game (name, genre, date)VALUES('$name', '$genre', '$date')";
    $conn->query($sql);
    header("Location:wala.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
</head>
<body>
    <h1>Add User</h1>
    <form method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Genre:</label><br>
        <input type="text" name="genre" required><br>
        <label>Date:</label><br>
        <input type="date" name="date" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>