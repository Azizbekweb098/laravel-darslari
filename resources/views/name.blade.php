<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="color: white">
    @foreach ($records as $record)
        <p>This is record {{ $record}} - {{$loop->remaining}}</p>
    @endforeach
</div>
</body>
</html>
