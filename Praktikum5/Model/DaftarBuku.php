<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $Daftar_Buku = array(
            new Buku('Belajar Pemprograman Web', 'Emely W.', 'Informatika', '2024'),
            new Buku('Matematika Diskrit', 'Rinaldi Munir', 'Andi Publisher', '2020'),
            new Buku('kalkulus', 'Robert T.', 'Erlangga', '2019'),
            new Buku('Metodologi Penelitian', 'James W.', 'Pustaka UIN', '2024'),
        );

        return $Daftar_Buku;
    }

    public function getKolomTabel(){
        return array('NO', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
}