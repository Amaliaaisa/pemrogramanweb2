<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }

    public function dashboard(){
        return view('admin/dashboard');
    }
    public function daftarBuku(){
        $bookModel = model('BookModel');
        $data ['books'] = $bookModel->findAll();
        return view('admin/daftar-buku', $data);
    }
    public function createBuku(){
        $data = $this->request->getPost();
        $fileCover = $this->request->getFile('cover');

        if(!$fileCover->hasMoved()){
            $path = $fileCover->store('images');
            $data['cover'] = $path;
        }
        $bookModel = model('BookModel');

        if($bookModel->insert($data, false)){
            return redirect()->to('/admin/daftar-buku')->with('berhasil', 'Data berhasil disimpan');
        }else{
            return redirect()->to('/admin/daftar-buku')->with('error', 'Data gagal disimpan');
        }
    }
    public function transksi(){
        return view('admin/transaksi');
    }
    public function pelanggan(){
        return view('admin/pelanggan');
    }
    
}
