<?php

require_once 'App/init.php';

$produk1 = new Komik('naruto', 'mashimoto', 'Badainamco', 20000, 100);
$produk2 = new Games('Bleach', 'Yhaha', 'Capcom', 10000, 20);

$cetakProduk = new  CetakProduk;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
echo "<hr>";

use App\Produk\User as ProdukUser;
use App\service\User as ServiceUser;

$User1 = new ProdukUser();
echo "<br>";
$User2 = new ServiceUser();
