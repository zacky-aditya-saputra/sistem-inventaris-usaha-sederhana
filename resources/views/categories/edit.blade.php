<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Kategori</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Edit Kategori</h2>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Nama Kategori</label>
                <input type="text" name="name" value="{{ $category->name }}" class="w-full border p-2 rounded" required>
            </div>
            <div class="flex justify-end gap-2">
                <a href="{{ route('categories.index') }}" class="text-gray-500 py-2 px-4">Batal</a>
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded">Update</button>
            </div>
        </form>
    </div>
</body>
</html>