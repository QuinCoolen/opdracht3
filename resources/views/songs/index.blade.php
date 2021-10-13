<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($songs as $song)
        <li><a href="/songs/{{$song->id}}">  {{ $song->title }} - {{$song->singer}} </a></li>
    @endforeach
</body>
</html>