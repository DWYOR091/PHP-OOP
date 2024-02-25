<?php
//interface
interface InfoProduk
{
    //tidak boleh ada property
    //boleh ada construct
    public function getInfoProduk();
}

//dalam kelas abstact harus ada minimal 1 method abstract
abstract class Produk
{
    //visibility (private,public,protected)
    protected $judul,
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

    abstract public function getInfo();
}

//child class
class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;

    //overriding (parent::)
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo()
    {
        $str = " {$this->judul}, {$this->getLabel()}, (Rp. {$this->harga}) ";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Komik: " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}
//inheritance
//child class
class Games extends Produk implements InfoProduk
{
    public $waktuMain;

    //overriding
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str = " {$this->judul}, {$this->getLabel()}, (Rp. {$this->harga}) ";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game:" . $this->getInfo() . ", ~ {$this->waktuMain} Jam";
        return $str;
    }
}

class cetakProduk
{
    //array
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    //method cetak
    //obejct Type
    public function cetak()
    {
        $str = "Daftar Produk: <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$produk1 = new Komik('naruto', 'mashimoto', 'Badainamco', 20000, 100);
$produk2 = new Games('Bleach', 'Yhaha', 'Capcom', 10000, 20);

$cetakProduk = new  CetakProduk;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
