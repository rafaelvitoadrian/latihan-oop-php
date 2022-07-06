<?php

abstract class Produk{

    private $judul,
            $penulis,
            $penerbit,
            $diskon = 0;

    private $harga;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0
    )
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul()
    {
        return $this->judul;
    }
    //setter
    public function setJudul($judul)
    {
        //validasi
        // if(!is_string($judul)){
        //     throw new Exception("Judul Harus String");
        // }
        $this->judul = $judul;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    //getter
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon/100);
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

}

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0,
    $jmlHalaman=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit="penerbit", $harga=0,
    $waktuMain=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : ". $this->getInfo() ." ~ {$this->waktuMain} Jam";
        return $str;
    }
}

class CetakInfoProduk{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK : <BR>";

        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

// $produk = new Produk;


$produk1 = new Komik("Naruto" , "Rafael Vito Adrian", "Aku Laku", 5000, 100,);
$produk2 = new Game("Uncharted" , "Hasbiya", "Aku Laku Ah", 25000 ,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();




