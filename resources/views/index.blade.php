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
        <h1>movie list</h1>
    </header>
    <main>
        <ol>
            @foreach ($movies as $movie)
                <li>
                    <div class="internal-box">
                        <h2>{{ $movie->original_title }}</h2>
                        <div>Vote: {{ $movie->vote}}</div>
                        <div>Nationality: {{ $movie->nationality}}</div>
                        <div>Date: {{ $movie->date}}</div>
                    </div>
                </li>
            @endforeach
        </ol>
    </main>
</body>
</html>