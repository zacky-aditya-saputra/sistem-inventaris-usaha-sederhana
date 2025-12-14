<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Perpindahan Aset</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal p-8">

    <div class="max-w-6xl mx-auto">
        
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">📜 Riwayat Perpindahan Aset</h1>
                <p class="text-gray-500">Pantau siapa yang meminjam dan mengembalikan barang.</p>
            </div>
            
            <a href="{{ route('products.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded shadow">
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
                    @foreach($transactions as $t)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            {{ $t->transaction_date->format('d M Y') }}
                        </td>

                        <td class="py-3 px-6 text-left font-medium text-gray-800">
                            {{ $t->product->name ?? 'Barang Terhapus' }}
                            <div class="text-xs text-gray-400">{{ $t->product->sku ?? '-' }}</div>
                        </td>

                        <td class="py-3 px-6 text-center">
                            @if($t->type == 'loan')
                                <span class="bg-yellow-100 text-yellow-700 py-1 px-3 rounded-full text-xs font-bold border border-yellow-200">
                                    📤 Dipinjamkan
                                </span>
                            @elseif($t->type == 'return')
                                <span class="bg-green-100 text-green-700 py-1 px-3 rounded-full text-xs font-bold border border-green-200">
                                    📥 Dikembalikan
                                </span>
                            @elseif($t->type == 'restock')
                                <span class="bg-blue-100 text-blue-700 py-1 px-3 rounded-full text-xs font-bold border border-blue-200">
                                    📦 Restock Baru
                                </span>
                            @elseif($t->type == 'sold')
                                <span class="bg-red-100 text-red-700 py-1 px-3 rounded-full text-xs font-bold border border-red-200">
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
                            @if($t->recipient)
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
            
            @if($transactions->isEmpty())
                <div class="p-6 text-center text-gray-500">
                    Belum ada riwayat transaksi apapun.
                </div>
            @endif
        </div>
    </div>

</body>
</html>