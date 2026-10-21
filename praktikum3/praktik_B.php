<?php
class Akun {
    public string $username = "";
    private string $password = "rahasia";

    public function info(): string {
        return $this->username;
    }
}

$akun = new Akun();
$akun->username = "mahasiswa";
echo $akun->info();