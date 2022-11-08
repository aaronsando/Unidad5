<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if (Auth::user())
        <h1>{{ Auth::user()->name }}</h1>
    @endif

   <form action="{{ url('login/') }}" method="post">
    @csrf

    <label>Email: </label>
    <input type="email" name="email" placeholder="example@email.com" >
    <br><hr>
    <label>Password: </label>
    <input type="text" name="password" placeholder="***********" >

    <button type="submit">Accept</button>

   </form>
    
</body>
</html>