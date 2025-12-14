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
        class="text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base ms-3 mt-3 text-sm p-2 focus:outline-none inline-flex sm:hidden">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10" />
        </svg>
    </button>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-neutral-primary-soft border-e border-default">

            <div class="flex flex-col items-center justify-center mb-6 mt-4">
                <img src="logoInventarus.png" alt="Logo Inventarus" class="w-3/4 h-auto object-contain">

                <h1 class="text-2xl font-extrabold text-gray-800 mt-3 tracking-wider uppercase font-sans">
                    INVENTARUS
                </h1>
            </div>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <svg class="w-5 h-5 transition duration-75 group-hover:text-fg-brand" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 5v14M9 5v14M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>
                        <span
                            class="bg-neutral-secondary-medium border border-default-medium text-heading text-xs font-medium px-1.5 py-0.5 rounded-sm">Pro</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                        <span
                            class="inline-flex items-center justify-center w-4.5 h-4.5 ms-2 text-xs font-medium text-fg-danger-strong bg-danger-soft border border-danger-subtle rounded-full">2</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-fg-brand"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="sm:ml-64">

        <div class="max-w-6xl mx-auto">

            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">📜 Riwayat Perpindahan Aset</h1>
                    <p class="text-gray-500">Pantau siapa yang meminjam dan mengembalikan barang.</p>
                </div>

                <a href="{{ route('products.index') }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded shadow">
                    ⬅ Kembali ke Stok
                </a>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
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
                                    <div class="text-xs text-gray-400">{{ $t->product->sku ?? '-' }}</div>
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
