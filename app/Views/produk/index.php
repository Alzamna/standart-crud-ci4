<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="max-w-5xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Product List</h2>
        <a href="<?= base_url('produk/create') ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Product</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">Product Name</th>
                    <th class="py-2 px-4 border-b">Price</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Picture</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($produk as $p): ?>
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-4 border-b text-center"><?= $no++ ?></td>
                    <td class="py-2 px-4 border-b"><?= esc($p['nama_produk']) ?></td>
                    <td class="py-2 px-4 border-b">Rp <?= number_format($p['harga'],0,',','.') ?></td>
                    <td class="py-2 px-4 border-b"><?= esc($p['deskripsi']) ?></td>
                    <td class="py-2 px-4 border-b text-center">
                        <?php if (!empty($p['gambar'])): ?>
                            <img src="<?= base_url('uploads/' . $p['gambar']) ?>" class="mx-auto rounded shadow" width="80">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                    <td class="py-2 px-4 border-b text-center">
                        <a href="<?= base_url('produk/edit/'.$p['id']) ?>" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</a>
                        <a href="<?= base_url('produk/delete/'.$p['id']) ?>" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 ml-2" onclick="return confirm('Yakin hapus produk?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
