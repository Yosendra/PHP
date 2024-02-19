<?php
/*

Final Class
Keyword 'final' dapat digunakan kepada class.
Pertanda bahwa class tersebut tidak dapat diwariskan.
Secara otomatis semua child class tersebut akan error.

*/

class SocialMedia {}

final class Facebook extends SocialMedia {}     # set kelas sebagai final

class FakeFacebook extends Facebook {}          # error karena kelas Facebook sudah final