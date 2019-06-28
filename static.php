<?php



// class ContohStatic 
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "hello " . self::$angka++ . " kali.";
//     }
// }


// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();



class Contoh
{
    public static $angka = 1;

    // nilai static tidak akan berubah ketika membuat objek baru

    public function halo()
    {
        return "hello " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();