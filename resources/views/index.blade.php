<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Laravel Model Control</title>
    </head>
    <body>
        <div class="container">
            <h1>I nostri Movies:</h1>
            <div class="box-movies">
                @foreach ($movies as $movie)
                    <div class="movie">
                        <h3>Title: {{$movie["title"]}}</h3>
                        <p>Original title: {{$movie["original_title"]}}</p>
                        <p>Nationality: {{$movie["nationality"]}}</p>
                        <span>Data uscita: {{$movie["date"]}}</span><br>
                        <span>Voto: {{$movie["vote"]}}</span>
                    </div> 
                @endforeach
                
            </div>
        </div>
    </body>
</html>