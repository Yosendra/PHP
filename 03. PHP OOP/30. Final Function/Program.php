<?php
/*

Final Function
Keyword 'final' dapat juga digunakan pada function.
Pertanda function tersebut tidak dapat dioverride di child classnya.
Cocok untuk mengunci implementasi dari sebuah method agar tidak bisa diubah oleh child classnya.

*/

class SocialMedia {
    public function login(string $username, string $password): void
    {}
}

class Facebook extends SocialMedia {
    public final function login(string $username, string $password): void       # override login(), set method sebagai final
    {}
}

class FakeFacebook extends Facebook {
    public function login(string $username, string $password): void             # error, login() tidak bisa dioverride karena sudah final
    {}
} 