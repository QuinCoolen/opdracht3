<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Albums</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <button class="fixed m-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="window.location.href = '/albums';">Back</button>
    <div class="grid place-items-center h-screen">
        <div class="flex flex-col text-center gap-4">
            <h1 class="text-2xl">Create New Album</h1>
            <form class="flex flex-col gap-4" action="{{ route('albums.store') }}" method="POST">
                @csrf
                <input class="flex-shrink w-52 m-auto text-center px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" type="text" name="name" id="name" required>
                <input class="flex-shrink w-52 m-auto text-center px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" type="number" name="year" id="year" required>
                <input class="flex-shrink w-52 m-auto text-center px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" type="number" name="times_sold" id="times_sold" required>
                <select name="band_id" id="band_id">
                    @foreach ($bands as $band)
                        <option value="{{$band->id}}">{{$band->name}}</option>
                    @endforeach
                </select>
                <button class="flex-shrink w-24 m-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>