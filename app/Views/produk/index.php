<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h2 class="text-2xl font-bold mb-6">Data Produk</h2>
<table class="min-w-full bg-white border border-gray-200 rounded shadow">
    <thead>
        <tr class="bg-blue-100">
            <th class="py-2 px-4 border-b">Nama</th>
            <th class="py-2 px-4 border-b">Harga</th>
            <th class="py-2 px-4 border-b">Deskripsi</th>
            <th class="py-2 px-4 border-b">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($produk as $p): ?>
        <tr class="hover:bg-gray-50">
            <td class="py-2 px-4 border-b"><?= esc($p['nama_produk']) ?></td>
            <td class="py-2 px-4 border-b">Rp <?= number_format($p['harga'],0,',','.') ?></td>
            <td class="py-2 px-4 border-b"><?= esc($p['deskripsi']) ?></td>
            <td class="py-2 px-4 border-b">
                <a href="<?= base_url('produk/edit/'.$p['id']) ?>" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</a>
                <a href="<?= base_url('produk/delete/'.$p['id']) ?>" onclick="return confirm('Yakin hapus?')" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>
