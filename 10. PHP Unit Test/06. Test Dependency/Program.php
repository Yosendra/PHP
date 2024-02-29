<?php
/*

Test Dependency
Pada saat membuat unit test, kadang kita ingin melanjutkan unit test sebelumnya atau bahkan tergantung dengan unit test sebelumnya.
Di PHPUnit kita bisa membuat unit test yang tergantung dari hasil unit test lainnya.
Untuk melakukan itu, kita bisa menggunakan annotation @depends namaUnitTest

Perhatian
Unit test yang baik harus independen, tidak bergantung dengan unit test lainnya.
Jika kita membuat unit test yang bergantung dengan unit test lain, maka jika unit test sebelumnya error, maka unit test yang bergantung juga error.

Look at:
• TestDependency.php

*/