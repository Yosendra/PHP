<?php
/*

Just-In-Time Compilation
PHP mengenalkan fitur Just-In-Time Compilation.
Dimana fitur ini akan mempercepat proses eksekusi program PHP yang dibuat.
Namun sebelum itu kita perlu tahu bagaimana cara kerja PHP menjalankan kode.

PHP Code --> Tokenize (menghasilkan Tokens) 
--> Parse (Tokens di-parse menghasilkan Abstract Syntax Tree) 
--> Compile (AST dicompile menghasilkan OPcodes) 
--> Execute (OPcodes dieksekusi) 
--> CPU

OPCache
Secara default PHP akan selalu membaca kode PHP ketika menjalankan program PHP.
OPCache digunakan untuk meningkatkan performance PHP dengan cara menyimpan hasil kompilasi kode PHP di memory.
Dengan demikian PHP tidak perlu lagi membaca ulang kode program PHP setiap kali program dijalankan.
PHP akan langsung membaca dari OPCache yang sudah disimpan di memory.
Fitur OPCache harus diaktifkan terlebih dahulu sebelum bisa digunakan.
More detail: https://www.php.net/manual/en/book.opcache.php

Mengaktifkan Fitur OPCache
Di file php.ini, search [opcache], hapus tanda ; pada line ";opcache.enable=1"

OPCache akan membuat kode program kita terhindar dari harus melakukan tokenize, parsing, dan compile terus menerus tiap request.
JIT akan membuat hasil kompilasi tidak perlu diterjemahkan oleh virtual machine PHP. melainkan langsung dijalankan oleh machine.
JIT di PHP menggunakan library bahasa pemrograman C bernama DynASM. Oleh karena itu JIT bisa mentranslate hasil compile opcode ke
instruksi machine.

*/
