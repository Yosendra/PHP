<?php

function foo() {
    echo "FOO" . PHP_EOL;
}
function bar() {
    echo "BAR" . PHP_EOL;
}
$functionName = "foo";
$functionName();        // perhatikan di sini
$functionName = "bar";
$functionName();        // memanggil fungsi menggunakan variable