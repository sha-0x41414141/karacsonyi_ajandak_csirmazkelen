<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift types</title>
</head>
<body>
@if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
    @if(session('success'))
        {{session('success')}}
    @endif

    <ul>
        @foreach($gifttypes as $gifttype)
            <li>{{$gifttype->type}}</li>
        @endforeach
    </ul>
</body>
</html>