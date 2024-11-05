<?php
include "Orang.php";

class Mahasiswa extends orang{
    public $nim;
    public $prodi;

    public function getNilaiSemester(){


    }

}

class Mahasiswaasing extends Mahasiswa {
    
    //override
    public function ucapSalam(){
        echo "Hello My Name " . $this->nama . "<br>";

    }
}