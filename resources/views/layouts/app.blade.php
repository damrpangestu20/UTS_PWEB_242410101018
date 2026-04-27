<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hidroponik Jember')</title>
    <!-- Tailwind CSS CDN (bebas, tidak termasuk template jadi) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    
    <!-- Navbar component -->
    @include('components.navbar')
    
    <!-- Main content -->
    <main class="container mx-auto px-4 py-6 flex-grow">
        @yield('content')
    </main>
    
    <!-- Footer component -->
    @include('components.footer')
    
</body>
</html>