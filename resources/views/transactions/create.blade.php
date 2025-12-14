<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catat Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">📋 Catat Barang Masuk/Keluar</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Barang</label>
                <select name="product_id"
                    class="w-full px-3 py-2 border rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                    <option value="">-- Pilih Barang --</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">
                            {{ $product->name }} (Stok: {{ $product->stock }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Jenis Transaksi</label>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Jenis Aktivitas</label>
                        <select name="type"
                            class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="loan">📤 Peminjaman (Barang Pindah)</option>
                            <option value="return">📥 Pengembalian (Masuk ke Gudang)</option>
                            <option value="restock">📦 Tambah Stok Baru (Beli Aset)</option>
                            <option value="sold">❌ Barang Hilang/Rusak (Hapus Aset)</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Jumlah</label>
                    <input type="number" name="quantity"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        min="1" required>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal Transaksi</label>
                <input type="date" name="transaction_date"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ date('Y-m-d') }}" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Catatan (Opsional)</label>
                <textarea name="notes" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Contoh: Pembelian dari supplier A"></textarea>
            </div>
            <div class="bg-blue-50 p-4 rounded-lg border border-blue-200 mb-6">
                <h3 class="text-blue-800 font-bold mb-3 text-sm uppercase">📍 Detail Pengawasan (Opsional)</h3>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2">Penanggung Jawab / Penerima</label>
                        <input type="text" name="recipient"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Contoh: Pak Budi / Staff IT">
                        <p class="text-xs text-gray-500 mt-1">*Isi nama orang yang membawa barang</p>
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2">Lokasi Penempatan</label>
                        <input type="text" name="location"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Contoh: Lab Komputer 1">
                        <p class="text-xs text-gray-500 mt-1">*Di mana barang ini akan ditaruh?</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-end gap-2">
                <a href="{{ route('products.index') }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Batal</a>
                <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Simpan
                    Transaksi</button>
            </div>
        </form>
    </div>

</body>

</html>
