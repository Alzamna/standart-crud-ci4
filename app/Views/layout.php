<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Product' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 p-4 mb-8">
        <div class="container mx-auto flex justify-between items-center">
            <a href="<?= base_url('produk') ?>" class="text-white font-bold text-xl">Product Management</a>
            <a href="<?= base_url('produk/create') ?>" class="bg-white text-blue-600 px-4 py-2 rounded shadow hover:bg-blue-100">Add Product</a>
        </div>
    </nav>
    <main class="container mx-auto bg-white p-8 rounded shadow">
        <?= $this->renderSection('content') ?>
    </main>
</body>
</html> 