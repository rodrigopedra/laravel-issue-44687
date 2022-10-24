<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<h2>Plain</h2>
<form action="/" method="POST">
    @csrf
    <input type="text" name="a" value="b">
    <button type="submit">send</button>
</form>

<hr>

<h2>With validation</h2>
<form action="/validate" method="POST">
    @csrf
    <input type="text" name="a" value="b">
    <button type="submit">send</button>
</form>

<h2>With Controller</h2>
<form action="/with-controller" method="POST">
    @csrf
    <input type="text" name="a" value="b">
    <button type="submit">send</button>
</form>
</body>
</html>
