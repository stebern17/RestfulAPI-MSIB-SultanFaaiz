<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet"> <!-- Link to your compiled Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('styles')
</head>

<body class="bg-gray-100">

    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-bold text-gray-800 hover:text-gray-600 transition duration-200 mx-auto">Tugas Restful API</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto p-6 shadow-lg rounded-lg mt-6">
        @yield('content')
    </main>

    <footer class="bg-white shadow-md mt-6">
        <div class="container mx-auto px-4 py-4 text-center">
            <p class="text-gray-600">© {{ date('Y') }} My Application. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>