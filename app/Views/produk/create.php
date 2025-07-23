<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="max-w-lg mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-6">Tambah Produk</h2>
    <form action="<?= base_url('produk/store') ?>" method="post" enctype="multipart/form-data" class="space-y-4">
        <div>
            <label class="block mb-1 font-semibold">Nama Produk</label>
            <input type="text" name="nama_produk" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>
        <div>
            <label class="block mb-1 font-semibold">Harga</label>
            <input type="number" name="harga" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>
        <div>
            <label class="block mb-1 font-semibold" for="gambar">Gambar Produk</label>
            <input type="file" name="gambar" id="gambar" class="w-full border border-gray-300 rounded px-3 py-2" onchange="previewGambar(event)">
            <br>
            <img id="preview-gambar" src="#" alt="Preview Gambar" style="display:none; max-width:150px; margin-top:10px; border-radius:8px; box-shadow:0 2px 8px #0001;"/>
        </div>
        <div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Simpan</button>
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
