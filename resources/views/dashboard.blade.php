<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex sm:flex-row flex-col w-full justify-center py-4">
        <h1 class="text-2xl">Welcome</h1>
    </div>
    <div class="grid gap-4 grid-rows-2 grid-cols-3 content-between">
        <a class="text-center w-52 m-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/bands">Go To Bands</a>
        <a class="text-center w-52 m-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/albums">Go To Albums</a>
        <a class="text-center w-52 m-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/songs">Go To Songs</a>
    </div>
</body>
</html>