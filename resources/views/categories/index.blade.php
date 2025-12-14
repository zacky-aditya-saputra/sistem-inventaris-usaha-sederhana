<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kategori</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans p-8">
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">📂 Kategori</h1>
            <div class="flex gap-2">
                <a href="{{ route('products.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                    ⬅ Kembali ke Produk
                </a>
                <a href="{{ route('categories.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    + Kategori Baru
                </a>
            </div>
        </div>

        <div class="bg-white shadow-md rounded overflow-hidden">
            <table class="min-w-full w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-6 text-left">Nama Kategori</th>
                        <th class="py-3 px-6 text-left">Slug</th>
                        <th class="py-3 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-6 font-medium">{{ $category->name }}</td>
                        <td class="py-3 px-6 text-gray-500 text-sm">{{ $category->slug }}</td>
                        <td class="py-3 px-6 text-center flex justify-center gap-2">
                            <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500 hover:text-blue-700 font-bold">Edit</a>
                            <span class="text-gray-300">|</span>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Hapus kategori ini? PERINGATAN: Semua produk di kategori ini juga akan terhapus!');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-bold">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>