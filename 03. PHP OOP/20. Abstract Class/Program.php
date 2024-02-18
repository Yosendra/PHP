<?php
/*

Abstract Class
Abstract class adalah class yang tidak bisa dibuat sebagai object (diinstansiasi) secara langsung,
hanya bisa diturunkan.
Gunakan keyword 'abstract' sebelum keyword 'class'.
Abstract class bisa digunakan sebagai kontrak child class.

Look at:
• Location.php

*/

require_once __DIR__ . "/Data/Location.php";

#$location = new Location();     # error, cannot instantiate abstract class
$city = new City();              # child class dari kelas Location yang bisa diinstansiasi
$city = new Province();
$city = new Country();