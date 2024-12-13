<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New gift</title>
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
    <form action="{{route('gifts.store')}}" method="post">
        @csrf
        <label for="gift_name">Gift name</label>
        <input type="text" name="gift_name" id="gift_name"> <br>
        <label for="price">Price</label>
        <input type="number" name="price" id="price"> <br>
        <label for="gift_type_id">Gift types</label>
        <select name="gift_type_id" id="gift_type_id">
            @foreach($gift_types as $gift_type)
                <option value="{{$gift_type->id}}">{{$gift_type->type}}</option>
            @endforeach
        </select> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>