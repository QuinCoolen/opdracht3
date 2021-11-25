<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Album</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="overflow-hidden">
    <button class="fixed m-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="window.location.href = '/albums';">Back</button>
    <div class="grid place-items-center h-screen">
        <ul class="border-2 border-black rounded-lg p-3">
            <li>ID: {{$album->id}}</li>
            <li>Name: {{$album->name}}</li>
            <li>Year: {{$album->year}}</li>
            <li>Times Sold: {{$album->times_sold}}</li>
        </ul>        
    </div>
</body>
</html>