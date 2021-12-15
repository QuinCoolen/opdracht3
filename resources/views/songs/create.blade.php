<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <button class="fixed m-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="window.location.href = '/songs';">Back</button>
    <div class="grid place-items-center h-screen">
        <div class="flex flex-col text-center gap-4">
            <h1 class="text-2xl">Create New Song</h1>
            <form class="flex flex-col gap-4" action="{{ route('songs.store') }}" method="POST">
                @csrf
                <input class="flex-shrink w-52 m-auto text-center px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" type="text" name="title" id="title" required>
                <input class="flex-shrink w-52 m-auto text-center px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" type="text" name="singer" id="singer" required>
                <button class="flex-shrink w-24 m-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
            </form>
            <h1 class="text-2xl">Search For Song</h1>
            <form class="flex flex-col gap-4" action="{{route('songs.create')}}" method="GET">
                @csrf
                <input class="flex-shrink w-52 m-auto text-center px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" type="text" name="title" id="title" required>
                <button class="flex-shrink w-24 m-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
            </form>
            <div class="flex flex-wrap gap-4 p-5 col-span-3">
                @foreach($songsFromAPI as $song)
                        <div class="flex-auto border-2 border-black rounded-lg p-3 flex flex-col gap-4">
                            <p>{{$song['name']}}</p>
                            <p>{{$song['artist']}}</p>
                        
                            <form class="flex flex-col gap-4" action="{{ route('songs.index') }}" method="POST">
                                @csrf
                                <input type="hidden"  name="title" value="{{$song['name']}}">
                                <input type="hidden" name="singer" value="{{$song['artist']}}">
                                <br>
                                <button class="flex-shrink w-24 m-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
                            </form>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>