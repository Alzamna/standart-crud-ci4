<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-800 text-white flex flex-col py-8 px-2">
            <div class="mb-10 text-center">
                <span class="text-2xl font-bold tracking-wide">Admin Panel</span>
            </div>
            <nav class="flex-1 space-y-1">
                <a href="<?= base_url('/') ?>" class="flex items-center py-2 px-4 rounded-lg transition hover:bg-blue-700 <?= service('uri')->getPath() == '' ? 'bg-blue-900' : '' ?>">
                    <span class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 0H7m6 0v6m0 0H7m6 0h6" /></svg>
                    </span>
                    Dashboard
                </a>
                <a href="<?= base_url('produk') ?>" class="flex items-center py-2 px-4 rounded-lg transition hover:bg-blue-700 <?= service('uri')->getPath() == 'produk' ? 'bg-blue-900' : '' ?>">
                    <span class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6m16 0H4" /></svg>
                    </span>
                    Product
                </a>
            </nav>
            <div class="mt-auto text-xs text-blue-200 text-center pt-8">
                &copy; <?= date('Y') ?> Admin Panel
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 p-8">
            <?= $this->renderSection('content') ?>
        </main>
    </div>
</body>
</html> 