<?php
//cara membuat property dan method pada class
// jualan produk
// komik
// game
class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    //method
    public function getLabel($judul, $penulis)
    {
        return "$this->judul,$this->penulis";
    }
}
// //instance
// $produk1 = new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);
// $produk2 = new produk();
// $produk2->judul;
// var_dump($produk2);

//game
// $produk3 = new produk();
// $produk3->judul = "Resedent Evil";
// $produk3->penulis = "Capcom";
// $produk3->penerbit = "Badainamco";
// $produk3->harga = 20000;

// //komik
// $produk4 = new Produk();
// $produk4->judul = "Naruto";
// $produk4->penulis = "Masashi";
// $produk4->penerbit = "Sony";
// $produk4->harga = 100000;

// //menampillkan
// echo "Game: " . $produk3->getLabel();
// echo "<br>";
// echo "Komik: " . $produk4->getLabel();