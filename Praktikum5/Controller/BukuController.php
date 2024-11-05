<?php

include_once "model/DaftarBuku.php";

class BukuController{
    public function jalankan(){
        //mengakses model
        $Data = new DaftarBuku();

        //memberi data model ke view dan menampilkan view
        include "view/BukuView.php";
    }
}