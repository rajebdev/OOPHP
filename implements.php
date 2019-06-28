<?php


interface Buah
{
    public function makan();
    public function setWarna($warna);
}

interface Benda
{
    public function setUkuran();
}

class Apel implements Buah
{
    protected $warna, $ukuran;

    public function makan()
    {
        echo "Makan&nbsp;sampek tengah";
    }
    
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function setUkuran($ukuran)
    {
        $this->ukuran = $ukuran;
    }
}


$apelIjo = new Apel();
$apelIjo->makan();