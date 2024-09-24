<?php
include "Orang.php";

class Mahasiswa extends orang{
    public $nim;
    public $prodi;

    public function getNilaiSemester(){


    }

}

class Mahasiswa extends Mahasiswa {
    
    //override
    public function ucapSalam(){
        echo "Hello My Name " . $this->nama . "<br>";

    }
}