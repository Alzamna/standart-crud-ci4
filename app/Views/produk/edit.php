<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="max-w-lg mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-6">Edit Produk</h2>
    <form action="<?= base_url('produk/update/' . $produk['id']) ?>" method="post" enctype="multipart/form-data" class="space-y-4">
        <div>
            <label class="block mb-1 font-semibold">Nama Produk</label>
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
            <label class="block mb-1 font-semibold" for="gambar">Gambar Produk</label>
            <input type="file" name="gambar" id="gambar" class="w-full border border-gray-300 rounded px-3 py-2" onchange="previewGambar(event)">
            <br>
            <img id="preview-gambar" src="<?= !empty($produk['gambar']) ? base_url('uploads/' . $produk['gambar']) : '#' ?>" alt="Preview Gambar" style="max-width:150px; margin-top:10px; border-radius:8px; box-shadow:0 2px 8px #0001;<?= empty($produk['gambar']) ? 'display:none;' : '' ?>"/>
            <?php if (!empty($produk['gambar'])): ?>
                <input type="hidden" name="gambar_lama" value="<?= $produk['gambar'] ?>">
            <?php endif; ?>
        </div>
        <div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Update</button>
            <a href="<?= base_url('produk') ?>" class="ml-2 text-gray-600 hover:underline">Batal</a>
        </div>
    </form>
</div>
<script>
function previewGambar(event) {
    const [file] = event.target.files;
    const preview = document.getElementById('preview-gambar');
    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        preview.src = '#';
        preview.style.display = 'none';
    }
}
</script>
<?= $this->endSection() ?>
