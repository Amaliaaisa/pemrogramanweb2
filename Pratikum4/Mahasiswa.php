<?php

require_once "Orang.php";

require_once "Nilai.php";
class Mahasiswa extends Orang{
    protected string $nim;
    protected Nilai $nilai;

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setNilai($nilai){
        $this->nilai = $nilai;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getNilai(){
        return $this->nilai;
    }

    public function tampilkanData(){
        echo "Nama : " . $this->nama . "<br>";
        echo "Nim : " . $this->nim. "<br>";
        echo "Nilai Tugas : " . $this->nilai->getTugas(). "<br>";
        echo "UTS : " . $this->nilai->getUts(). "<br>";
        echo "UAS : " . $this->nilai->getUas(). "<br>";
    }
}