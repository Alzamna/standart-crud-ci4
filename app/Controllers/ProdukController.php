<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    public function index()
    {
        $model = new ProdukModel();
        $data['produk'] = $model->findAll();
        return view('produk/index', $data);
    }

    public function create()
    {
        return view('produk/create');
    }

    public function store()
    {
        $gambar = $this->request->getFile('gambar');

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            $namaFile = $gambar->getRandomName();
            $gambar->move('uploads', $namaFile); 
        } else {
            $namaFile = null; 
        }

        $model = new ProdukModel();
        $model->insert([
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $namaFile,
        ]);
        return redirect()->to(base_url('produk'));
    }

    public function edit($id)
    {
        $model = new ProdukModel();
        $data['produk'] = $model->find($id);
        return view('produk/edit', $data);
    }

    public function update($id)
    {
        $model = new ProdukModel();
        $gambar = $this->request->getFile('gambar');
        $gambarLama = $this->request->getPost('gambar_lama');
        
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            $namaFile = $gambar->getRandomName();
            $gambar->move('uploads', $namaFile);
            // Optional: hapus gambar lama jika ada dan berbeda
            if ($gambarLama && file_exists('uploads/' . $gambarLama)) {
                @unlink('uploads/' . $gambarLama);
            }
        } else {
            $namaFile = $gambarLama;
        }

        $model->update($id, [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $namaFile,
        ]);
        return redirect()->to(base_url('produk'));
    }

    public function delete($id)
    {
        $model = new ProdukModel();
        $model->delete($id);
        return redirect()->to(base_url('produk'));
    }
}
