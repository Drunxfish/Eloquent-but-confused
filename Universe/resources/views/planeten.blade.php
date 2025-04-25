<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planeten</title>
    <link rel="stylesheet" href="/styles/planet.css">
</head>

<body>
    @if (session('error'))
            <script defer>alert('{{ session('error') }}')</script>
    @endif
    <div class="container">
        <div class="wrapper">
            <div class="titel">
                <h1>Planeten</h1>
                <span>kies een planeet</span>
            </div>
            <div class="planets">
                @foreach ($planeten as $planeet)
                    <div class="box">
                        <a href="/planeten/{{ $planeet->name }}">{{ $planeet->name }}</a>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</body>

</html>