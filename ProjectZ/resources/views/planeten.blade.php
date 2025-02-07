<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    <link rel="stylesheet" href="/styles/planet.css">
</head>

<body>
    <div class="container">
        @if (session('error'))
            <script>
                alert('{{ session('error') }}');
            </script>
        @endif
        <article>
            <h1 class="beschrijving">Query Routes</h1>
            @foreach ($planeten as $planet)
                <a href="planeten?planeet={{ $planet['name'] }}">
                    <h1> {{ $planet['name'] }} </h1>
                </a>
                <p> {{ $planet['description'] }} </p>
            @endforeach
        </article>
        <article>
            <h1 class="beschrijving">Dynamische Routes</h1>
            @foreach ($planeten as $planet)
                <a href="planeten/{{ $planet['name'] }}">
                    <h1> {{ $planet['name'] }} </h1>
                </a>
                <p> {{ $planet['description'] }} </p>
            @endforeach
        </article>
    </div>
</body>

</html>