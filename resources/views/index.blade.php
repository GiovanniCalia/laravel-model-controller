<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Movies</title>

</head>
<body>
    <header>
        <h1>lista film</h1>
    </header>
    <main>
        <ol>
            @foreach ($movies as $movie)
                <li>
                    <div class="internal-box">
                        <h2>{{ $movie->title }}</h2>
                        <div>Voto: {{ $movie->vote}}</div>
                        <div>Nazionalità: {{ $movie->nationality}}</div>
                        <div>Data d'uscita: {{ $movie->date}}</div>
                    </div>
                </li>
            @endforeach
        </ol>
    </main>
</body>
</html>