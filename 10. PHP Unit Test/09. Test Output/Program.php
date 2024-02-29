<?php
/*

Test Output
Apa yang terjadi jika kita ingin menguji sebuah fitur namun fitur tersebut tidak mengembalikan data apapun.
Misal hanya melakukan echo saja.
PHPUnit memiliki fitur untuk mendeteksi output. Dengan demikian kita bisa memastikan bahwa output yang 
dihasilkan sesuai dengan yang kita inginkan.
Untuk melakukan itu kita bisa menggunakan Assert::expectOutputString()

Look at:
• Person.php
• PersonTest.php

*/