<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songs Index</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="grid gap-4 grid-rows-2 grid-cols-3 content-between">
    <div class="flex gap-4 p-5 col-span-3">
    @foreach ($songs as $song)
        <div class="flex-1 border-2 border-black rounded-lg p-3 flex flex-col gap-4">
            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded flex-1" href="/songs/{{$song->id}}">  {{ $song->title }} - {{$song->singer}} </a>
            <div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex-1" onclick="window.location.href = '/songs/{{$song->id}}/edit';">Edit</button>
            </div>
            <form action="{{ route('songs.destroy', $song->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
            </form>
        </div>
    @endforeach
    </div>

    <a class="col-start-2 self-end bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded object-bottom" href="/songs/create">Create New Song</a>
</body>
</html>