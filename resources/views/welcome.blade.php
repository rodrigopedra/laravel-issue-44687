<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<form action="/" method="POST">
    @csrf
    <input type="text" name="a" value="b">
    <button type="submit">send</button>
</form>
</body>
</html>
