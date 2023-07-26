<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/js/app.js', 'resources/css/app.scss'])
        <title>Document</title>
    </head>
<body>
    @component('layouts.components.navbar')@endcomponent
    <h1 class="text-center text-primary pt-5">Selamat datang , {{ $name }} anda adalah {{ $role }}</h1>
   
</body>
</html>