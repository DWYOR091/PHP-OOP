<?php
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
