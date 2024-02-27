<?php
/*

Form Post
Saat kita belajar HTML, kita tahu di HTML terdapat form.
Form biasanya digunakan untuk mengirim data dari client ke server.
Secara default method di form adalah GET, sehingga saat kita submit, data akan dikirim melalui
bentuk query parameter yang bisa ditangkap menggunakan $_GET di PHP.
Namun jika kita gunakan form dengan method POST, maka secara otomatis request dari client ke server
akan berupa HTTP POST. Hal ini menyebabkan data form yang dikirim akan dikirim melalui body,
bukan query parameter. Untuk menerima datanya di PHP, kita perlu menggunakan $_POST.

$_POST
$_POST adalah global variable yang berisikan data array yang dikirim dari client ke server dalam bentuk form post.
Cara penggunaan $_POST sama seperti $_GET

Look at:
• post.php

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>11. Form Post</title>
</head>
<body>
    <form action="post.php" method="post">                      <!-- perhatikan attribute action dan method nya -->
        <label for="first-name">Firstname : </label>
        <input type="text" name="first-name" id="first-name">

        <label for="last-name">Lastname : </label>
        <input type="text" name="last-name" id="last-name">

        <input type="submit" value="Register">
    </form>
</body>
</html>