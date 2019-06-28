<?php 

// Jualan Produk
// Komik
// Game

class Produk{
    public $judul    = "judul",
           $penulis  = "penulis",
           $penerbit = "penerbit",
           $harga    = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

}


// $prod1        = new Produk();
// $prod1->judul = "Naruto";
// var_dump($prod1);

// $prod2                 = new Produk();
// $prod2->judul          = "Uncharted";
// $prod2->tambahProperty = "hahaha";
// var_dump($prod2);


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// echo $produk3->getLabel();
// echo "<br>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : ".$produk3->getLabel();
echo "<br>";
echo "Game : ".$produk4->getLabel();
