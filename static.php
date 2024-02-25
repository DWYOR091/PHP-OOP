<?php
//static
// class contohStatic
// {
//     public static $angka = 1;

//     public static function tampil()
//     {
//         return "Halo." . self::$angka++;
//     }
// }


// echo contohStatic::tampil();
// echo contohStatic::tampil();
// echo contohStatic::tampil();

//contoh tanpa static
class contohTanpaStatic
{
    public static $angka = 1;

    public function tampilkan()
    {
        return "Halo" . self::$angka++;
    }
}

$obj = new contohTanpaStatic();
echo $obj->tampilkan();
echo $obj->tampilkan();
echo $obj->tampilkan();
echo $obj->tampilkan();

$obj2 = new contohTanpaStatic();
echo $obj2->tampilkan();
echo $obj2->tampilkan();
echo $obj2->tampilkan();
