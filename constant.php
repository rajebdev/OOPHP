<?php 


// define('NAMA', 'Wijanarko Putra Rajeb');
// echo NAMA;
// echo "<br>";

// const UMUR = 19;
// echo UMUR;

// define disimpan global
// const digunakan untuk class ataupun global


// class Coba
// {
//     const NAMA = "Narko";
    
// }

// echo Coba::NAMA;

function Coba()
{
    return __FUNCTION__;
}

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;












