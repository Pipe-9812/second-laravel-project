<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Laravel 2 - {{ $title }}</title>
</head>

<style>
    body, html {
        font-family: sans-serif, arial;
    }

    textarea {
        resize: vertical;
    }

    .active {
        color: blue;
        font-weight: bold;
    }
</style>
<body>

    <x-navigation></x-navigation>

    @if ( session('success') )
        <div style="padding: 0.7rem; background-color: green; color: #fff;">
            {{ session('success') }}
        </div>
    @endif

    {{ $slot }}

</body>
</html>