<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddGambarToProduk extends Migration
{
    public function up()
    {
        $this->forge->addColumn('produk', [
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'after' => 'deskripsi',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('produk', 'gambar');
    }
} 