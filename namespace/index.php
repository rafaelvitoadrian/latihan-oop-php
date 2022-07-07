<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto" , "Rafael Vito Adrian", "Aku Laku", 5000, 100,);
// $produk2 = new Game("Uncharted" , "Hasbiya", "Aku Laku Ah", 25000 ,50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<br>";
// new Coba();

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
 