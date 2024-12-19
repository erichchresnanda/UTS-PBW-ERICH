<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <!-- Tambahkan CSS atau script lainnya di sini -->
</head>
<body>
    <header>
        <h1>Header Aplikasi</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Footer Aplikasi</p>
    </footer>
</body>
</html>
