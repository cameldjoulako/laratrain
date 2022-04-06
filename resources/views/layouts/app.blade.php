<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenue sur le Blog IT de Camel Djoulako </title>
    {{-- Importation du css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="p-5">
    @include('partials.navbar')
    {{-- on defini un contenu dynamique qui se placera ici --}}


    <div class="container p-5">
        @yield('content')
    </div>





    {{-- Importation du js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
