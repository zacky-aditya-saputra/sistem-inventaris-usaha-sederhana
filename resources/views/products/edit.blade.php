<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">✏️ Edit Barang</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT') <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Barang</label>
                <input type="text" name="name" value="{{ $product->name }}"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Kategori</label>
                    <select name="category_id"
                        class="w-full px-3 py-2 border rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Stok</label>
                    <input type="number" name="stock" value="{{ $product->stock }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Harga (Rp)</label>
                    <input type="number" name="price" value="{{ $product->price }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>
            </div>

            <div class="flex justify-end gap-2 mt-6">
                <a href="{{ route('products.index') }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Batal</a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Barang</button>
            </div>
        </form>
    </div>

</body>

</html>
