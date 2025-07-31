<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Portfolio' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold">My Portfolio</a>
            <nav class="space-x-6">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/portfolio" class="hover:text-blue-600">Portfolio</a>
                <a href="/blog" class="hover:text-blue-600">Blog</a>
                <a href="/contact" class="hover:text-blue-600">Contact</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-6 py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center py-6">
        &copy; {{ date('Y') }} My Portfolio. All rights reserved.
    </footer>
</body>
</html>
