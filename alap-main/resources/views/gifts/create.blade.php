<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New gift</title>
</head>
<body>
    <form action="{{route('gift.create')}}" method="post">
        @csrf
        <label for="gift_name">Gift name</label>
        <input type="text" name="gift_name" id="gift_name">
        <label for="price">Price</label>
        <input type="number" name="price" id="price">
        <label for="gift_type_id">Gift types</label>
        <select name="gift_type_id" id="gift_type_id">

        </select>
    </form>
</body>
</html>