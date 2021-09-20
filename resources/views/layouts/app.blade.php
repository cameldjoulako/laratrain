<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenu sur le Blog IT </title>
    {{-- Importation du css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @include('partials.navbar')
    {{-- on defini un contenu dynamique qui se placera ici --}}
    @yield('content')

    {{-- Importation du js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
