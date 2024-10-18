<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class='bg-pink-50 min-h-screen flex flex-col'>
    <div id="container" class="m-0 p-0 flex-grow flex flex-col gap-3 min-h-fit min-w-full">
        <!-- navbar -->
        @include('layouts.navbar')
        <!-- main content -->
        @yield('content')
        <!-- footer -->
        @include('layouts.footer')
    </div>

</body>

</html>