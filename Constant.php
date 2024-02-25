<?php
//konstanta ada 2 yaitu define() dan const
//define() tidak bisa didalam kelas
//const bisa di dalam kelas

class coba
{
    const NAMA = "Muhamad Rifqi";
}

//cara memanggilnya seperti static
echo coba::NAMA;

//cara pakai define
// define('NAMA' (nama konstanta), valuenya)
define('ALAMAT', "CIMAHI");
//cara panggin menggunakan define
echo "<br>" . ALAMAT;
