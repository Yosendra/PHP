<?php
/*

DateTime
class DateTime digunakan untuk manipulasi data waktu.

Datatime Function                           
setTime($hour, $minute, $second)            Mengubah waktu DateTime
setDate($year, $month, $day)                Mengubah tanggal DateTime
setTimestamp($unixTimestamp)                Mengubah unix timestamp DateTime

Timezone dari konfigurasi di file php.ini (C:\xampp\php\php.ini)
Secara dafault timezone di file ini adalah berikut "date.timezone=Europe/Berlin"

DateInterval
Kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misal hanya menambah 1 tahun, atau mengurai beberapa hari.
Hal ini bisa dilakukan dengan function add milik DateTime.
Namun function add tersebut menerima parameter berupa DateInterval.
Saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita menambah interval.
Untuk pembuatan duration harus diawali dengan karakter P yang artinya period.
More detail: https://www.php.net/manual/en/dateinterval.construct.php

DateTimeZone
Saat kita membuat object DateTime, dia akan secara otomatis membuat waktu saat ini sesuai dengan timezone yang di setting
di konfigurasi date.timezone di file php.ini
Atau kita bisa menggunakan function setTimeZone untuk mengubah timezone DateTime.

Format DateTime
Kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat.
Hal ini bisa kita lakukan menggunakan function format().
Function format() menerima argument berupa format string, ini bisa kita gunakan untuk memanipulasi cara kita
menampilkan string format waktu.
More detail: https://www.php.net/manual/en/datetime.format.php

Parse DateTime
Selain format DateTime menjadi string, di PHP kita bisa melakukan hal sebaliknya yaitu memparsing string 
menjadi DateTime sesuai dengan format yang kita mau.
Untuk melakukan itu, kita bisa menggunakan static function createFromFormat() dari class DateTime.

*/

$date = new DateTime();                                             # insisialisasi object DateTime
$date->setDate(2020, 12, 30);
$date->setTime(12, 12, 12);

var_dump($date);

$date->add(new DateInterval("P1Y"));                                # tambah periode 1 tahun dengan object DateInterval

$dateInterval = new DateInterval("P1M");                            # buat interval 1 bulan
$dateInterval->invert = true;                                       # artinya buat interval menjadi minus
$date->add($dateInterval);                                          # kurangkan $date sebanyak 1 bulan (date diminuskan interval)

var_dump($date);

$date = new DateTime();                                             # settingan TimeZone mengikuti pengaturan di php.ini yaitu "Europe/Berlin"
var_dump($date);                                                    # waktu saat ini dengan TimeZone "Europe/Berlin"
$date->setTimezone(new DateTimeZone("Asia/Jakarta"));               # ubah TimeZone pada object $date menjadi "Asia/Jakarta"
var_dump($date);                                                    # waktu saat ini dengan TimeZone "Asia/Jakarta"

echo $date->format("Y-m-d H:i:s") . PHP_EOL;                        # format tanggal dalam string, mengubah dari object DateTime menajadi string

# Parsing string DateTime, mengubah dari bentuk string menjadi object DateTime
$date = DateTime::createFromFormat("Y-m-d H:i:s", "1998-12-29 10:10:10", new DateTimeZone("Asia/Jakarta"));

var_dump($date);
