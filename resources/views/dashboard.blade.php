<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Inventarus</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 border-r border-gray-200 flex flex-col justify-between shadow-xl">
            
            <div>
                <div class="flex flex-col items-center justify-center mb-6 mt-4">
                    <img src="{{ asset('logoInventarus.png') }}" alt="Logo Inventarus"
                        class="w-2/3 h-auto object-contain">
                    <h1 class="text-2xl font-extrabold text-gray-800 mt-3 tracking-wider uppercase">INVENTARUS</h1>
                </div>

                <span class="flex items-center">
                    <span class="h-px flex-auto bg-gray-300 mb-6"></span>
                </span>

                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center p-2 text-purple-700 rounded-lg bg-purple-100 group">
                            <svg class="w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M304 70.1C313.1 61.9 326.9 61.9 336 70.1L568 278.1C577.9 286.9 578.7 302.1 569.8 312C560.9 321.9 545.8 322.7 535.9 313.8L527.9 306.6L527.9 511.9C527.9 547.2 499.2 575.9 463.9 575.9L175.9 575.9C140.6 575.9 111.9 547.2 111.9 511.9L111.9 306.6L103.9 313.8C94 322.6 78.9 321.8 70 312C61.1 302.2 62 287 71.8 278.1L304 70.1zM320 120.2L160 263.7L160 512C160 520.8 167.2 528 176 528L224 528L224 424C224 384.2 256.2 352 296 352L344 352C383.8 352 416 384.2 416 424L416 528L464 528C472.8 528 480 520.8 480 512L480 263.7L320 120.3zM272 528L368 528L368 424C368 410.7 357.3 400 344 400L296 400C282.7 400 272 410.7 272 424L272 528z" />
                            </svg>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:text-purple-700 hover:bg-gray-100 group">
                            <svg class="w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M32 206.1L32 544C32 561.7 46.3 576 64 576C81.7 576 96 561.7 96 544L96 304C96 286.3 110.3 272 128 272L512 272C529.7 272 544 286.3 544 304L544 544C544 561.7 558.3 576 576 576C593.7 576 608 561.7 608 544L608 206.1C608 178.6 590.4 154.1 564.2 145.4L335.2 69.1C325.3 65.8 314.7 65.8 304.8 69.1L75.8 145.4C49.6 154.1 32 178.6 32 206.1zM496 320L144 320L144 384L496 384L496 320zM144 480L496 480L496 416L144 416L144 480zM496 512L144 512L144 576L496 576L496 512z" />
                            </svg>
                            <span class="ms-3">Stok Gudang</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:text-purple-700 hover:bg-gray-100 group">
                            <svg class="w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M97.5 400l50-160 379.4 0-50 160-379.4 0zm190.7 48L477 448c21 0 39.6-13.6 45.8-33.7l50-160c9.7-30.9-13.4-62.3-45.8-62.3l-379.4 0c-21 0-39.6 13.6-45.8 33.7L80.2 294.4 80.2 96c0-8.8 7.2-16 16-16l138.7 0c3.5 0 6.8 1.1 9.6 3.2L282.9 112c13.8 10.4 30.7 16 48 16l117.3 0c8.8 0 16 7.2 16 16l48 0c0-35.3-28.7-64-64-64L330.9 80c-6.9 0-13.7-2.2-19.2-6.4L273.3 44.8C262.2 36.5 248.8 32 234.9 32L96.2 32c-35.3 0-64 28.7-64 64l0 288c0 35.3 28.7 64 64 64l192 0z" />
                            </svg>
                            <span class="ms-3">Kategori</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('transactions.index') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:text-purple-700 hover:bg-gray-100 group">
                            <svg class="w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M288 64c106 0 192 86 192 192S394 448 288 448c-65.2 0-122.9-32.5-157.6-82.3-10.1-14.5-30.1-18-44.6-7.9s-18 30.1-7.9 44.6C124.1 468.6 201 512 288 512 429.4 512 544 397.4 544 256S429.4 0 288 0C202.3 0 126.5 42.1 80 106.7L80 80c0-17.7-14.3-32-32-32S16 62.3 16 80l0 112c0 17.7 14.3 32 32 32l24.6 0c.5 0 1 0 1.5 0l86 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-38.3 0C154.9 102.6 217 64 288 64zm24 88c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 104c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65 0-94.1z" />
                            </svg>
                            <span class="ms-3">Riwayat</span>
                        </a>
                    </li>
                </ul>
            </div>

            <ul class="space-y-2 font-medium border-t border-gray-200 pt-4">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-red-100 hover:text-red-700 group cursor-pointer">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                            </svg>
                            <span class="ms-3 whitespace-nowrap">Logout</span>
                        </a>
                    </form>
                </li>
            </ul>

        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="max-w-7xl mx-auto mt-6">
            
            <div class="mb-8">
                <div class="flex justify-between items-end">
                    <div>
                        <h2 class="text-4xl font-bold text-gray-800">Dashboard</h2>
                        <p class="text-gray-600 mt-1">
                            Selamat Datang, 
                            <span class="font-bold text-purple-600 text-lg">
                                {{ Auth::user()->name ?? 'Tamu' }}
                            </span> 👋
                        </p>
                    </div>
                    <div class="text-sm text-gray-500 hidden sm:block">
                        {{ now()->translatedFormat('l, d F Y') }}
                    </div>
                </div>
                
                <div class="mt-4 p-4 bg-purple-50 border-l-4 border-purple-500 text-purple-900 rounded-r shadow-sm">
                    <p class="text-sm leading-relaxed">
                        Terima kasih telah menggunakan <strong>Inventarus</strong> :) Halaman ini (Dashboard) menyajikan ringkasan statistik dan status terkini aset yang Anda miliki. Silakan klik menu di <strong>Sidebar kiri</strong> untuk mengelola Stok Gudang, mengatur Kategori, atau memantau Riwayat Transaksi secara <em>real-time</em>.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-blue-500">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-500 text-sm font-medium uppercase">Jenis Barang</p>
                            <h3 class="text-3xl font-bold text-gray-800">{{ $totalProducts ?? 0 }}</h3>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">📦</div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-green-500">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-500 text-sm font-medium uppercase">Total Unit Aset</p>
                            <h3 class="text-3xl font-bold text-gray-800">{{ $totalAssets ?? 0 }}</h3>
                            <p class="text-xs text-green-600 mt-1">Gudang + Dipinjam</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">🏢</div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-yellow-500">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-500 text-sm font-medium uppercase">Sedang Dipinjam</p>
                            <h3 class="text-3xl font-bold text-gray-800">{{ $totalBorrowed ?? 0 }}</h3>
                            <p class="text-xs text-yellow-600 mt-1">Unit di luar</p>
                        </div>
                        <div class="bg-yellow-100 p-3 rounded-full">👋</div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-purple-500">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-500 text-sm font-medium uppercase">Kategori</p>
                            <h3 class="text-3xl font-bold text-gray-800">{{ $totalCategories ?? 0 }}</h3>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-full">🏷️</div>
                    </div>
                </div>
            </div>

            <div class="flex gap-2 mb-6">

                    <a href="{{ route('transactions.create') }}"
                        class="flex items-center py-2 px-4 bg-purple-600 hover:bg-purple-700 transition delay-150 duration-300 ease-in-out text-white rounded-xl group">
                        <span class="font-bold">Catat Transaksi</span>
                    </a>

                    <a href="{{ route('products.create') }}"
                        class="flex items-center py-2 px-4 bg-purple-600 hover:bg-purple-700 text-white rounded-xl group">
                        <span class="font-bold">Tambah Barang</span>
                    </a>
                </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-800">⏱️ Aktivitas Terakhir</h3>
                        <a href="{{ route('transactions.index') }}" class="text-blue-500 hover:underline text-sm">Lihat Semua</a>
                    </div>
                    <ul class="divide-y divide-gray-200">
                        @if(isset($recentTransactions))
                            @foreach($recentTransactions as $t)
                            <li class="py-3 flex justify-between items-center">
                                <div class="flex items-center gap-3">
                                    <div class="bg-gray-100 p-2 rounded">
                                        @if($t->type == 'loan') 📤 @elseif($t->type == 'return') 📥 @else 📝 @endif
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-800">{{ $t->product->name }}</p>
                                        <p class="text-xs text-gray-500">
                                            {{ $t->type == 'loan' ? 'Dipinjam oleh' : ($t->type == 'return' ? 'Dikembalikan oleh' : 'Aktivitas') }} 
                                            {{ $t->recipient ?? '-' }}
                                        </p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold">{{ $t->quantity }} Unit</p>
                                    <p class="text-xs text-gray-400">{{ $t->created_at->diffForHumans() }}</p>
                                </div>
                            </li>
                            @endforeach
                            @if($recentTransactions->isEmpty())
                                <p class="text-gray-500 text-center py-4">Belum ada aktivitas.</p>
                            @endif
                        @else
                            <p class="text-gray-500 text-center py-4">Data tidak tersedia.</p>
                        @endif
                    </ul>
                </div>

                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-xl font-bold text-red-600 mb-4">⚠️ Stok Menipis (< 5)</h3>
                    @if(isset($lowStockItems) && $lowStockItems->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-red-50">
                                    <tr>
                                        <th class="px-4 py-2">Barang</th>
                                        <th class="px-4 py-2 text-center">Sisa Stok</th>
                                        <th class="px-4 py-2 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lowStockItems as $item)
                                    <tr class="border-b">
                                        <td class="px-4 py-3 font-medium text-gray-900">{{ $item->name }}</td>
                                        <td class="px-4 py-3 text-center font-bold text-red-600">{{ $item->stock }}</td>
                                        <td class="px-4 py-3 text-center">
                                            <a href="{{ route('transactions.create') }}" class="text-blue-600 hover:underline">Restock</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="flex flex-col items-center justify-center h-40 bg-green-50 rounded-lg border border-green-200">
                            <span class="text-4xl">✅</span>
                            <p class="text-green-700 mt-2 font-medium">Semua stok aman!</p>
                        </div>
                    @endif
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>
</html>