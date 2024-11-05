<?php

class Orang{
    protected $nama;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function ucapSalam(){
        echo "Halo Perkenalkan nama saya " . $this->nama . "<br>";

    }
}