<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class AdminController extends BaseController
{
    public function home()
    {
        $produkModel = new ProdukModel();
        $jumlahProduk = $produkModel->countAllResults();
        return view('admin/home', [
            'jumlahProduk' => $jumlahProduk
        ]);
    }
} 