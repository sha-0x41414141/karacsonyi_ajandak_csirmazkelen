<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New gift type</title>
</head>
<body>
    <form action="{{route('gift_type.create')}}" method="post">
        <label for="type">Gift type: </label>
        <input type="text">
        <button type="submit">Submit</button>
    </form>
</body>
</html>