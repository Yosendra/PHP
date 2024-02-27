<?php
/*

Integrasi dengan HTML
PHP adalah bahasa pemrograman yang secara default terintegrasi baik dengan HTML.
Dengan intergrasi PHP dan HTML, kita bisa membuat web HTML yang dinamis dalam artian tidak statis dan
bisa berubah-ubah sesuai dengan logika kode program kita.
Secara default ketika kita menggunakan kode <? dan diakhiri ?>, artinya di dalamnya kita bisa memasukan
kode PHP, namun di luar kode tersebut kita bisa memasukan kode HTML seperti biasa.

Kode <?=
Kadang saat integrasi PHP dan HTML kita sering sekali melakukan kode sederhana seperti <?php echo $title ?>, <?php echo $body ?>
Hal itu bisa dipersingkat dengan menggunakan <?=, misal: <?= $title ?>, <?= $body ?>

Tidak hanya HTML
walaupun secara default PHP terintegrasi dengan HTML, namun bukan berarti hanya bisa membuat konten HTML yang dinamis.
PHP bisa mengembalikan konten apapun seperti CSS, Javascript, Image, Video, dan lainya.

*/
?>

<?php
    /* Hanya kode PHP pada blok yang diapit oleh tag <?php dan ?> */
    $title = "Hello PHP dan HTML";
    $body = "Hello PHP dan HTML";
?>

<!-- Diluar tag php di atas kita bisa menulisakn tag html seperti biasa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title ?> <!-- Bisa kembali menggunakan syntax php di dalam tag php -->
    </title>
</head>
<body>
    <h1>
        <?php echo $body ?> <!-- Bisa kembali menggunakan syntax php di dalam tag php -->
        <br>
        <?= $body ?> <!-- Lebih ringkas menggunakan tag berikut, tanpa perintah echo -->
    </h1>
</body>
</html>
