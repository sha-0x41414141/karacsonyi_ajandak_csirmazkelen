<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gifts</title>
</head>
<body>@if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
<h1>Gifts</h1>
    <ul>
        @foreach($gifts as $gift)
        <ul>
            <li>
                Gift name: {{$gift->gift_name}}
            </li>
            <li>
                Price: {{$gift->price}}
            </li>
            <li>Gift type: {{$gift->giftType->type}}</li>
            <br>
        </ul>
        @endforeach
    </ul>
</body>
</html>