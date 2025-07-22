<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h2 class="text-2xl font-bold mb-6">Edit Produk</h2>
<form action="<?= base_url('produk/update/'.$produk['id']) ?>" method="post" class="space-y-4 max-w-lg">
    <div>
        <label class="block mb-1 font-semibold">Nama</label>
        <input type="text" name="nama_produk" value="<?= esc($produk['nama_produk']) ?>" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
    </div>
    <div>
        <label class="block mb-1 font-semibold">Harga</label>
        <input type="number" name="harga" value="<?= esc($produk['harga']) ?>" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
    </div>
    <div>
        <label class="block mb-1 font-semibold">Deskripsi</label>
        <textarea name="deskripsi" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" rows="3" required><?= esc($produk['deskripsi']) ?></textarea>
    </div>
    <div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Update</button>
    </div>
</form>
<?= $this->endSection() ?>
