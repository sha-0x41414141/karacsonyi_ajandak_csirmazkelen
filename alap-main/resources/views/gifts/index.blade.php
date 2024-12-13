<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gifts</title>
</head>
<body>
<h1>Gifts</h1>
    <ul>
        @foreach($gifts as $gift)
        <ul>
            <li>
                {{$gift->gift_name}}
            </li>
            <li>
                {{$gift->price}}
            </li>
            <li>{{$gift->giftType->type}}</li>
            <br>
        </ul>
        @endforeach
    </ul>
</body>
</html>