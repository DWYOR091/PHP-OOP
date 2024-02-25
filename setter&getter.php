<?php

class Produk
{
    //visibility (private,public,protected)
    public $judul,
        $penulis,
        $penerbit,
        $diskon = 0,
        $harga;

    //construct adalah metode khusus yg dijalankan secara otomatis
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    //setter
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    //getter
    public function getDiskon()
    {
        return $this->diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = " {$this->judul}, {$this->getLabel()}, (Rp. {$this->harga}) ";
        return $str;
    }
}

//child class
class Komik extends Produk
{
    public $jmlHalaman;

    //overriding (parent::)
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoKomik()
    {
        $str = "Komik: " . parent::getInfoLengkap() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}
//inheritance
//child class
class Games extends Produk
{
    public $waktuMain;

    //overriding
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoGame()
    {
        $str = "Game:" . parent::getInfoLengkap() . ", ~ {$this->waktuMain} Jam";
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

$produk1 = new Komik('naruto', 'mashimoto', 'Badainamco', 20000, 100);
$produk2 = new Games('Bleach', 'Yhaha', 'Capcom', 10000, 20);
// echo "Game: " . $produk1->getLabel();
// echo "<br>";
// echo "Game: " . $produk2->getLabel();
// echo "<br>";
// $cetakHasil = new cetakProduk();
// echo $cetakHasil->cetak($produk1);

//cetakHasil
echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();
echo "<hr>";
$produk1->setDiskon(50);
echo $produk1->getHarga();
echo "<hr>";


$produk1->setPenerbit("Rifqi");
echo $produk1->getPenerbit();
