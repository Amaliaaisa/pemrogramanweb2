<?php

class Orang{
    public $nama;
    public function __construct ($namanama)
    {
        $this->nama = $nama;
    }

    public function ucapSalam(){
        echo "Hallo Nama Saya ". $this->nama . "<br>";
    }
}