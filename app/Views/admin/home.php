<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="max-w-3xl mx-auto mt-16">
    <h1 class="text-3xl font-bold mb-4 text-center">Admin Dashboard</h1>
    <p class="text-gray-700 mb-8 text-center">Welcome to the admin dashboard. Use the sidebar menu to manage your data.</p>
    <div class="flex justify-center">
        <div class="bg-blue-100 border-l-4 border-blue-500 p-6 rounded-lg flex items-center shadow w-full max-w-md">
            <div class="bg-blue-500 text-white rounded-full p-3 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" /></svg>
            </div>
            <div>
                <div class="text-2xl font-bold"><?= $jumlahProduk ?></div>
                <div class="text-gray-600">Products Total</div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?> 