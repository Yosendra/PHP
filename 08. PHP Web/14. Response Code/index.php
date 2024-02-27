<?php
/*

Response Code
Dalam spesifikasi HTTP response dari server biasanya memiliki code atau dikenal HTTP response code.
Secara default di PHP response code adalah 200 OK
Ada banyak sekali HTTP response code: https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
Dalam pembuatan website mungkin kita jarang sekali melakukan perbuahan response code, namun jika nanti kita ingin membuat API
menggunakan PHP, response code sangat penting untuk digunakan. 

Test: request ke localhost tanpa query parameter name. Perhatikan response code-nya adalah 400 Bad Request

*/

if (!isset($_GET["name"]) || $_GET["name"] == "") {
      http_response_code(400);            # berikans status code 400 Bad Request pada response
      echo "Name is required";
      exit();
}

$say = "Hello " . htmlspecialchars($_GET["name"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <title>14. Response Code</title>
</head>
<body>
      <h1><?= $say ?></h1>
</body>
</html>