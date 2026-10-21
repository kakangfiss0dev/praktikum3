<?php
class Buku {
    public function __construct(
        public string $judul,
        public string $penulis,
        public int $tahun
    ) {}

    public function tampilInfo(): string {
        return $this->judul . " - " . $this->penulis . " (" . $this->tahun . ")";
    }
}

$buku1 = new Buku("Dasar PHP", "Abdul Kadir", 2021);
$buku2 = new Buku("Belajar PBO", "Alun Sujadda", 2023);

echo $buku1->tampilInfo() . "<br>";
echo $buku2->tampilInfo();