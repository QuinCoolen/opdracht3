<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('songs.update', $song->id) }}" method="POST">
        @csrf
        <input type="text" name="title" id="title" required value="{{ $song->title }}">
        <input type="text" name="singer" id="singer" required value="{{ $song->singer }}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>