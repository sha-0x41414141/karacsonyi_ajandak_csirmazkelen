<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New user</title>
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
    <form action="{{route('users.create')}}" method="post">
        @csrf
        <label for="person_name">User name:</label>
        <input type="text" name="person_name" id="person_name"> <br> 
        <label for="email">Email</label>
        <input type="email" name="email" id="email"> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>