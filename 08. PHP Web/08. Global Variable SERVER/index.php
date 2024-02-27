<?php
/*

Global Variable SERVER ($_SERVER)
Di PHP terdapat global variable bernama $_SERVER.
$_SERVER merupakan array yang berisikan informasi sepeti HTTP Header, path, lokasi script php, dan lainnya.
$_SERVER dibuat ketika ada request masuk, sehingga bisa jadi tiap request akan berbeda isinya.
Beberapa key yang ada di $_SERVER megikuti spesifikasi RFC 3875 - The Common Gateway Interface (CGI) Version 1.1: https://tools.ietf.org/html/rfc3675

*/

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1>$_SERVER</h1>
    <table>
    <?php foreach ($_SERVER as $key => $value): ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php endforeach ?>
    </table>
</body>
</html>