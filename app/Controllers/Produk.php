<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
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
        $model = new ProdukModel();
        $model->insert([
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
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
        $model->update($id, [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
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
