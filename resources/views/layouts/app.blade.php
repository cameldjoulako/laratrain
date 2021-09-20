<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenu sur blog IT </title>
</head>

<body>
    @include('partials.navbar')
    {{-- on defini un contenu dynamique qui se placera ici --}}
    @yield('content')
</body>

</html>
