<?php

// Jualan Produk
// Komik 
// Game

class Produk{

    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
    
    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "uncharted";
// var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Vito";
$produk3->penerbit = "Vila Dago Pamulang";
$produk3->harga = 30000;
// var_dump($produk3);

// echo "Komik : $produk3->judul , $produk3->penulis";
// echo "<br>";

// echo $produk3->getLabel();

// echo "<hr>";


$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Hasbiya";
$produk4->penerbit = "Vila Dago Tol";
$produk4->harga = 25000;


echo "Komik :" . $produk3->getLabel();
echo "<br>";
echo "Komik :" . $produk4->getLabel();


