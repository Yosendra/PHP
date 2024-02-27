<?php

session_start();    # menjalankan session, wajib jika ingin menggunakan session

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {
    header("Location: /");
    exit();
}

$say = "Hello " . $_SESSION["username_login"];      # mengambil data dari session

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Member</title>
</head>
<body>
    <h1><?= $say ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>
