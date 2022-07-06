<?php

// define('NAMA', "Rafael Vito");
// echo NAMA;

// const UMUR = 20;
// echo "<br>";
// echo UMUR;



// class Coba{
//     const NAMA = 'Rafael Vito';
// }

// echo Coba::NAMA;
class Coba{
    public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj->kelas;

?>