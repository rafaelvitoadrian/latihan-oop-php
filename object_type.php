<?php

class Produk{

    public  $judul,
            $penulis,
            $penerbit,
            $harga;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk3 = new Produk("Naruto" , "Rafael Vito Adrian", "Aku Laku", 3000);
$produk4 = new Produk("Uncharted" , "Hasbiya", "Aku Laku", 3000);
$produk5 = new Produk("Uncharted");

// echo "Komik :" . $produk3->getLabel();
// echo "<br>";
// echo "Komik :" . $produk4->getLabel();

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk3);


