<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-700 p-4 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <img src="/favicon.png" alt="Admin Logo" class="h-10 w-10 rounded-full shadow" />
            <span class="text-white font-bold text-xl">Admin Dashboard</span>
        </div>
        <form action="{{ route('admin.proseslogout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Logout</button>
        </form>
    </nav>
    <main class="max-w-4xl mx-auto mt-10 p-6 bg-white rounded shadow">
        @yield('content')
    </main>
</body>
</html>
