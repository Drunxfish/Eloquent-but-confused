<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ request('planet') }}</title> <!--  Dynamische titel COOOOL :D  -->
    <link rel="stylesheet" href="/styles/planet.css">
</head>

<body>
    <div class="containerd">
        <article>
            @foreach ($planeten as $planet)
                <h1 class="titel"> {{ $planet['name'] }} </h1>
                <p> {{ $planet['description']}} </p>
            @endforeach
        </article>
        <a href="/planeten"><button class="knop">Go back</button></a>
    </div>
</body>

</html>