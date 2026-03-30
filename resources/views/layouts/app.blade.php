<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Garden</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- NAVBAR -->
    <nav class="glass d-flex justify-content-between align-items-center px-4 py-3 m-3">
        <h5 class="m-0">🌱 Project Garden</h5>

        <div>
            <a href="/" class="me-3 text-dark text-decoration-none fw-semibold">Home</a>
            <a href="/projects" class="text-dark text-decoration-none fw-semibold">Projects</a>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container">
        @yield('content')
    </div>

</body>
</html>