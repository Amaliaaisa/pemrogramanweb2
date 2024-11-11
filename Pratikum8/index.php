<?php
//http://github.com/theoarbang//pemprogramanweb2/
include "Controller/BukuController.php";

$aplikasi = new BukuController();

$_request = $_SERVER['REQUEST_URI'];
$_request = parse_url($_request, PHP_URL_PATH);

switch($_request){
    case '/':
        case '/index.php':
        $aplikasi->jalankan();
        break;
        case '/index.php/buku/simpan':

        $aplikasi->simpan();
        break;
        case '/index.php/buku/hapus':
        $aplikasi->hapus();
        break;
        
        
    default:
        $aplikasi->jalankan();
    
}