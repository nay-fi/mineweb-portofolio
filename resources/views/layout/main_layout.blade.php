<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="app.css">
    <title>Main</title>
</head>

<body class=" bg-amber-50 dark:bg-gray-900 dark:text-amber-50">
    <!-- Section 1 [navbar, carousel, profile] -->
    <div class="flex px-2">
        @include('layout.navbar')
    </div>

    <!-- Hero Section -->
    <div>
        @yield('content')
    </div>


</body>

</html>