<?php

if (isset($_GET["key"]) && $_GET["key"] == "rahasia") {
    header('Content-Disposition: attachment; filename="logo.jpg"');
    header('Content-Type: image/jpg');
    readfile(__DIR__ . "/logo.jpg");
    exit();
} else {
    echo "Invalid Key";
}