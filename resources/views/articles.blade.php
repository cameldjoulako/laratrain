<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
</head>

<body>
    <h1>Liste des articles</h1>
    <br>
    <br>

    @foreach ($posts as $post)
        <h3> {{ $post }}</h3>
        <br>
    @endforeach
</body>

</html>
