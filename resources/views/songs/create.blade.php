<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/songs" method="POST">
        @csrf
        <input type="text" name="title" id="title" required>
        <input type="text" name="singer" id="singer" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>