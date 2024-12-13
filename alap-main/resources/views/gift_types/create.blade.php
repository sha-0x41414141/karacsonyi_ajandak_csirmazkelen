<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New gift type</title>
</head>
<body>
    @if($errors->any())
        @foreach($errors as $error)
            {{$error}}
        @endforeach
    @endif
    @if(session('success'))
        {{session('success')}}
    @endif
    <form action="{{route('gift_types.create')}}" method="post">
        @csrf
        <label for="type">Gift type: </label>
        <input type="text" name="type" id="type">
        <button type="submit">Submit</button>
    </form>
</body>
</html>