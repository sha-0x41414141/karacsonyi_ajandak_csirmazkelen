<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
    <h1>Users</h1>
    <ul>
        @foreach($users as $user)
        <ul>
            <li>
                Person name: {{$user->person_name}}
            </li>
            <li>
            Email: {{$user->email}}
            </li><br>
        </ul>
        @endforeach
    </ul>
</body>
</html>