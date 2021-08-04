<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>Products Index Page.</h1>
    <p>{{ $title }}</p>
    <p>{{ $description }}</p>

    <p>Data:
        @foreach ($data as $item)
        <p>
            {{ $item }}
        </p>
    @endforeach
    </p>
    <a href="{{ route("products") }}">Go to Products.</a>
</body>
</html>