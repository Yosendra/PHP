<!DOCTYPE html>
<html lang="en">
<head>
    <title>post.php</title>
</head>
<body>
    <table>
        <tr>
            <td>First Name :</td>
            <td><?= $_POST["first-name"] ?></td>    <!-- Akses data yang dikirim melalui method POST -->
        </tr>
        <tr>
            <td>Last Name :</td>
            <td><?= $_POST["last-name"] ?></td>
        </tr>
    </table>
</body>
</html>