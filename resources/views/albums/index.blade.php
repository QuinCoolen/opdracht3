<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Albums Index</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="grid justify-items-center py-4">
        <a class="text-center w-52 m-auto bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded" href="/albums/create">Create New Album</a>
    </div>
    <div class="grid gap-4 grid-rows-2 grid-cols-3 content-between">
        <div class="flex flex-wrap gap-4 p-5 col-span-3">
        @foreach ($albums as $album)
            <div class="flex-auto border-2 border-black rounded-lg p-3 flex flex-col gap-4">
                <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded flex-1" href="/albums/{{$album->id}}">  {{ $album->name }} <br/>Released: {{$album->year}} </a>
                <div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex-1" onclick="window.location.href = '/albums/{{$album->id}}/edit';">Edit</button>
                </div>
                <form action="{{ route('albums.destroy', $album->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
                </form>
            </div>
        @endforeach
        </div>
    </div>
</body>
</html>