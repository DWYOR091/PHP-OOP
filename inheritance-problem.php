<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $type,
        $waktuMain,
        $jmlHalaman;

    //construct adalah metode khusus yg dijalankan secara otomatis
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $type = "tipe", $waktuMain = 0, $jmlHalaman = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->type = $type;
        $this->waktuMain = $waktuMain;
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->type}: {$this->judul}, {$this->getLabel()}, (Rp. {$this->harga}) ";
        if ($str == "Komik") {
            $str .= $this->jmlHalaman . " Halaman";
        } else {
            $str .= $this->waktuMain . " Jam";
        }
        return $str;
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

$produk1 = new Produk('naruto', 'mashimoto', 'Badainamco', 20000, "Komik", 0, 100);
$produk2 = new Produk('Bleach', 'Yhaha', 'Capcom', 10000, "Game", 20, 0);
// echo "Game: " . $produk1->getLabel();
// echo "<br>";
// echo "Game: " . $produk2->getLabel();
// echo "<br>";
// $cetakHasil = new cetakProduk();
// echo $cetakHasil->cetak($produk1);

//cetakHasil
echo $produk1->getInfoLengkap();
