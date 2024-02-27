<?php
/*

Repository Pattern
Di dalam buku Domain-Driven Design, Eric Evans menjelaskan bahwa "repository is a mechanism for 
encapsulating storage, retrieval, and search behavior, which emulates a collection of objects."
Repository pattern bisanya digunakan sebagai jembatan antar business logic aplikasi kita dengan
semua perintah SQL ke database.
Jadi semua perintah SQL akan dituilis di Repository, sedangkan business logic kode program kita hanya 
cukup menggunakan repository tersebut.

                                            use
                call                       -----> Entity / Model
Business Logic -----> Repository Interface
                                           ------------> Repository Implementation -----> Database
                                            implement                               call

Entity / Model
Dalam pemrograman berorientasi objek, biasanya sebuah tabel di database akan selalu dibua representasinya sebagai class Entity/Model.
Ini bisa mempermudah ketika membuat kode program.
Misal ketika kita query ke Repository, dibanding mengmbalikan array, akan lebih baik repository melakukan konversi terlebih dahulu
ke class Entity/Model, sehingga kita tinggal menggunakan objectnya saja.

Look at:
• Comment.php
• CommentRepository.php

*/

require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . "/Repository/CommentRepository.php";
require_once __DIR__ . "/Model/Comment.php";

use Model\Comment;
use Repository\CommentRepository;

$connection = getConnection();
$commentRepository = new CommentRepository($connection);

# Di business logic tidak perlu menulis perintah SQL karena perintah SQL sudah dibungkus di dalam repository.
# semua operasi database yang melibatkan perintah SQL berada di kelas repository. 
# Jadi business logic memanggil method-method yang terdapat di objek repository untuk berinteraksi dengan data.

$comment = new Comment(
    email: "anonymous@mailinator.com",
    comment: "lorem ipsum");
$insertedComment = $commentRepository->insert($comment);                                # insert comment melalui objek repository

echo "ID : {$comment->getId()}" . PHP_EOL;
echo "Email : {$comment->getEmail()}" . PHP_EOL;
echo "Comment : {$comment->getComment()}" . PHP_EOL;

$id = $insertedComment->getId();
$comment = $commentRepository->findById($id);                                           # findById comment melalui objek repository

echo PHP_EOL;
echo "ID : {$comment->getId()}" . PHP_EOL;
echo "Email : {$comment->getEmail()}" . PHP_EOL;
echo "Comment : {$comment->getComment()}" . PHP_EOL;

$allComments = $commentRepository->findAll();                                           # findAll comment melalui objek repository
echo PHP_EOL;
var_dump($allComments);

$connection = null;
