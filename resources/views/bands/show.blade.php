<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Band</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="overflow-hidden">
    <button class="fixed m-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="window.location.href = '/bands';">Back</button>
    <div class="grid place-items-center h-screen">
        <ul class="border-2 border-black rounded-lg p-3">
            <li>ID: {{$band->id}}</li>
            <li>Name: {{$band->name}}</li>
            <li>Genre: {{$band->genre}}</li>
            <li>Founded: {{$band->founded}}</li>
            <li>Active Till: {{$band->active_till}}</li>
            <li>Albums:</li>
            @foreach ($band->albums as $album)
                <li>{{$album->name}}</li>
            @endforeach
        </ul>        
    </div>
</body>
</html>