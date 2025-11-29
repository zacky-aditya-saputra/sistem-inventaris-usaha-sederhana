<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris Usaha - Daftar Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">

    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">📦 Stok Gudang</h1>

        <div class="bg-white shadow-md rounded my-6 overflow-hidden">
            <table class="min-w-full w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Nama Barang</th>
                        <th class="py-3 px-6 text-left">Kategori</th>
                        <th class="py-3 px-6 text-center">Stok</th>
                        <th class="py-3 px-6 text-right">Harga</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach($products as $product)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap font-medium">
                            {{ $product->name }}
                            <div class="text-xs text-gray-400">{{ $product->sku }}</div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <span class="bg-blue-200 text-blue-700 py-1 px-3 rounded-full text-xs">
                                {{ $product->category->name }}
                            </span>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <span class="{{ $product->stock < 5 ? 'text-red-500 font-bold' : 'text-green-600' }}">
                                {{ $product->stock }} Unit
                            </span>
                        </td>
                        <td class="py-3 px-6 text-right">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>