<!DOCTYPE html>
<html lang="tm">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <!-- Tailwind CSS-i şu ýerde birikdirýäris -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- Sahypalaryň mazmuny şu ýere geler -->
    <main class="container mx-auto p-4">
        @yield('content')
    </main>

</body>
</html>
