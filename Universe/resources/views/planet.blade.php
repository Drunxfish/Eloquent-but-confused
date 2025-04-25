<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $planeet->name }}</title>
    <link rel="stylesheet" href="/styles/planet.css">
</head>

<body>
    <div class="single">
        <div class="sWrap">
            <article>
                <h1>{{ $planeet->name }}</h1>
                <span>grotte in km: {{ $planeet->size_in_km}}</span>
                <span>Solar Systeem: {{ $planeet->SolarSystem->name }}</span>
                <p>{{ $planeet->description }}</p>

            </article>
            <a href="/planeten">
                <button>terug naar planeten</button>
            </a>
        </div>
    </div>

    <script src="/javaScript/container.js"></script>
</body>

</html>