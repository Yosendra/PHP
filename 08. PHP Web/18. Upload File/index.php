<?php
/*

Upload File
Selain mengirim data berupa query parameter dan form post, kadang kita juga butuh melakukan upload file dari client ke server.
PHP web juga mampu menerima upload file.

PHP Upload File
Di PHP, untuk file yang diupload ke server, kita bisa menangkapnya dari global variable $_FILES.
Setiap ada file yang diupload, secara otomatis $_FILES akan berisi informasi seputar file yang diupload.
Detail: https://www.php.net/manual/en/features.file-upload.post-method.php
Saat diupload ke server, file akan secara otomatis disimpan di temporary folder di server.
Dari situ kita bisa pindahkan ke lokasi yang kita inginkan.

Cek di phpinfo() dengan key "upload_tmp_dir" untuk mengetahui dimana letak temporary file disimpan.

Memindahkan File Upload
Secara default file upload akan disimpan di temporary folder.
Kadang kita ingin memindahkan file tersebut ke lokasi dimana kita bisa mengakses file tersebut.
Untuk melakukan hal tersebut, PHP memiliki banyak function untuk memanipulasi file dan folder.
Detail: https://www.php.net/manual/en/ref.filesystem.php

*/

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["upload-file"])) 
{
    $file_name = $_FILES["upload-file"]["name"];        # ambil dari $_FILES
    $file_type = $_FILES["upload-file"]["type"];
    $file_size = $_FILES["upload-file"]["size"];
    $file_tmp_name = $_FILES["upload-file"]["tmp_name"];
    $file_error = $_FILES["upload-file"]["error"];
    
    # upload file. Memindahkan file dari temporary folder ke direktori tujuan
    move_uploaded_file($file_tmp_name, __DIR__ . "/" . $file_name);
}
?>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["upload-file"])): ?>
<table>
    <tr>
        <td>Name</td>
        <td><?= $file_name ?></td>
    </tr>
    <tr>
        <td>Type</td>
        <td><?= $file_type ?></td>
    </tr>
    <tr>
        <td>Size</td>
        <td><?= $file_size ?></td>
    </tr>
    <tr>
        <td>Temp. Name</td>
        <td><?= $file_tmp_name ?></td>
    </tr>
    <tr>
        <td>Error</td>
        <td><?= $file_error ?></td>
    </tr>
</table>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>18. Upload File</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">  <!-- attribute enctype="multipart/form-data" wajib untuk upload file -->
        <label for="upload-file">File</label>
        <input type="file" name="upload-file" id="upload-file">
        <input type="submit" value="Upload">
    </form>
</body>
</html>
