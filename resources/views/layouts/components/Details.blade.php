<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    <title>Page | @yield('title')</title>
</head>

<body>
    <h1>Halaman Details @yield('detail')</h1>
    <div class="m-5">
        @yield('content')
    </div>
</body>

</html>
