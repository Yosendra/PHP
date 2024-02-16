<?php
/* 

goto Operator
Operator ini digunakan untuk melompat ke kode program yang diinginkan.
Operator ini tidak direkomendasikan untuk digunakan karena dapat membingungkan flow dari program.

*/

goto a;
echo "Hello A" . PHP_EOL;       // statement ini akan diskip

a:
echo "Hello B" . PHP_EOL;