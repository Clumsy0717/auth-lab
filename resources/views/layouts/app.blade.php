<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Auth')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-mono antialiased min-h-screen flex flex-col justify-between">

    <main class="flex-grow flex items-center justify-center p-4">
        @yield('content')
    </main>

</body>
</html>