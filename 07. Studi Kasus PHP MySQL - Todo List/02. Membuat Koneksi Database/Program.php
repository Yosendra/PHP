<?php
/*

Look at:
• Database.php

*/

require_once __DIR__ . "/Config/Database.php";

use Config\Database;

$db = Database::getConnection();
echo "Sukses terhubung ke database";