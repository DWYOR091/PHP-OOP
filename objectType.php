<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    //construct adalah metode khusus yg dijalankan secara otomatis
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel()
    {
        return "$this->judul,$this->penulis";
    }
}

class cetakProduk
{
    //method cetak
    //obejct Type
    public function cetak(Produk $produk)
    {
        $str = "$produk->judul | {$produk->getLabel()} | $produk->harga";
        return $str;
    }
}

$produk1 = new Produk('naruto', 'mashimoto', 'Badainamco', 20000);
$produk2 = new Produk('Bleach', 'Yhaha', 'Capcom', 10000);
// echo "Game: " . $produk1->getLabel();
// echo "<br>";
// echo "Game: " . $produk2->getLabel();
echo "<br>";
$cetakHasil = new cetakProduk();
echo $cetakHasil->cetak($produk1);
