<?php

abstract class Produk{

    protected $judul,
            $penulis,
            $penerbit,
            $diskon = 0;

    protected $harga;
    
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

    abstract public function getInfo();

    
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