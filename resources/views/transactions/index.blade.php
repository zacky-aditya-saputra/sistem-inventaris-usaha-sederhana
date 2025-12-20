<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Perpindahan Aset</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal p-8">

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div
            class="h-full px-3 py-4 overflow-y-auto bg-gray-50 border-r border-gray-200 flex flex-col justify-between shadow-xl">
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
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:text-purple-700 hover:bg-gray-100 group">
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
                            class="flex items-center p-2 text-purple-700 rounded-lg bg-purple-100 group">
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
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-red-700"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="ms-3 whitespace-nowrap">Logout</span>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

    <div class="sm:ml-64">

        <div class="max-w-6xl mx-auto">

            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Riwayat Perpindahan Aset</h1>
                    <p class="text-gray-500">Pantau siapa yang meminjam dan mengembalikan barang.</p>
                </div>
                <div class="flex justify-end">

                    <a href="{{ route('transactions.create') }}"
                        class="flex items-center py-2 px-4 bg-purple-600 hover:bg-purple-700 text-white rounded-xl group">
                        <span class="font-bold">Catat Transaksi</span>
                    </a>

                </div>
            </div>

            <div class="bg-white shadow-md rounded overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr class="bg-purple-300 text-gray-900 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Tanggal</th>
                            <th class="py-3 px-6 text-left">Barang</th>
                            <th class="py-3 px-6 text-center">Aktivitas</th>
                            <th class="py-3 px-6 text-center">Jumlah</th>
                            <th class="py-3 px-6 text-left">Penanggung Jawab / Lokasi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($transactions as $t)
                            <tr class="border-b border-gray-200 hover:bg-gray-50">

                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{ $t->transaction_date->format('d M Y') }}
                                </td>

                                <td class="py-3 px-6 text-left font-medium text-gray-800">
                                    {{ $t->product->name ?? 'Barang Terhapus' }}

                                    <div class="text-xs text-gray-500 italic mt-1">
                                        {{ Str::limit($t->product->description ?? '-', 40) }}
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-center">
                                    @if ($t->type == 'loan')
                                        <span
                                            class="bg-yellow-100 text-yellow-700 py-1 px-3 rounded-full text-xs font-bold border border-yellow-200">
                                            📤 Dipinjamkan
                                        </span>
                                    @elseif($t->type == 'return')
                                        <span
                                            class="bg-green-100 text-green-700 py-1 px-3 rounded-full text-xs font-bold border border-green-200">
                                            📥 Dikembalikan
                                        </span>
                                    @elseif($t->type == 'restock')
                                        <span
                                            class="bg-blue-100 text-blue-700 py-1 px-3 rounded-full text-xs font-bold border border-blue-200">
                                            📦 Restock Baru
                                        </span>
                                    @elseif($t->type == 'sold')
                                        <span
                                            class="bg-red-100 text-red-700 py-1 px-3 rounded-full text-xs font-bold border border-red-200">
                                            ❌ Musnah/Rusak
                                        </span>
                                    @else
                                        <span class="bg-gray-100 text-gray-600 py-1 px-3 rounded-full text-xs">
                                            {{ $t->type }}
                                        </span>
                                    @endif
                                </td>

                                <td class="py-3 px-6 text-center font-bold">
                                    {{ $t->quantity }} Unit
                                </td>

                                <td class="py-3 px-6 text-left">
                                    @if ($t->recipient)
                                        <div class="flex flex-col">
                                            <span class="font-bold text-gray-700">👤 {{ $t->recipient }}</span>
                                            <span class="text-xs text-gray-500">📍 {{ $t->location ?? '-' }}</span>
                                        </div>
                                    @else
                                        <span class="text-gray-400 italic">- Tidak ada data -</span>
                                    @endif
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if ($transactions->isEmpty())
                    <div class="p-6 text-center text-gray-500">
                        Belum ada riwayat transaksi apapun.
                    </div>
                @endif
            </div>
        </div>
    </div>

</body>

</html>
