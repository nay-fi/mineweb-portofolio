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

<body class="bg-[#081626] text-sky-50"
    style="background-image: linear-gradient(to bottom, #8FABD4, #4A70A9, #112D4E, #242424)">
    <!-- Section 1 [navbar, carousel, profile] -->
    <div class="flex px-2">
        @include('layout.navbar')
    </div>

    <!-- Hero Section -->
    <div>
        @yield('content')
    </div>

</body>
<!-- Footer -->
@include('layout.footer')

</html>
