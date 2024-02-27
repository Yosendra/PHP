<?php
/*

Query Parameter
Saat mengakses web, kita akan menggunakan url dan di dalam url terdapat bagian yang bernama query parameter.
Query parameter adalah informasi tambahan yang bisa kita kirimkan dari client ke server secara dinamis.
Untuk menambahkan query parameter cukup gunakan ? diikuti key=value pada url.
Di PHP semua query parameter akan secara otomatis disimpan dalam global variable bernama $_GET.

$_GET
$_GET adalah global variabel berupa array yang berisikan key sesuai dengan nama query parameter dan value sesuai dengan value query parameter.
Jika kita mengirim query parameter name=John, artinya akan ada key name di dalam $_GET yang bernilai John.
Perlu diperhatikan, query parameter adalah data yang dikirim oleh client. Jadi pastikan sebelum menggunakannya kita harus cek apakah
datanya ada atau tidak, karena bisa jadi datanya memang tidak dikirim oleh client.

Test: http://localhost:8080/?name=John

Multiple Query Paramter
Query parameter di url bisa memiliki banyak parameter.
Jika kita ingin mengirim banyak query parameter, cukup gunakan tanda & diikuti dengan query parameter selanjutnya.

Test: http://localhost:8080/?name=John&gender=male

Query Parameter Array
Secara default query parameter berisikan data key=value, artinya 1 key akan berisi 1 value.
Di PHP ada kemampuan untuk mengirim query parameter dengan data lebih dari satu.
Data tersebut akan otomatis dikonversi menjadi array oleh PHP.
Caranya adalah kita wajib menambhkan tanda [] dikahir nama query paramternya.
Dan kita bisa menambah query parameter dengan nama yang sama berkali-kali.
Misal: daftar-nama[]=John&daftar-nama[]=David&daftar-nama[]=Mary
Maka secara otomatis parameter daftar-nama akan berisi ["John", "David", "Mary"]

Test: http://localhost:8080/?daftar-nama[]=John&daftar-nama[]=David&daftar-nama[]=Mary

*/
?>

<?php
    $name = $_GET['name'] ?? "";                # akses variable yang dikirim melalui query paremeter
    $gender = $_GET['gender'] ?? "unknown";
    
    $say = "Hello $name, I am $gender";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1><?= $say ?></h1>
    <?php if(isset($_GET["daftar-nama"])):                  # akses array query parameter "daftar-nama"                       
            foreach ($_GET["daftar-nama"] as $nama): ?>

        <h2><?= $nama ?></h2>

    <?php endforeach; endif; ?>
</body>
</html>
