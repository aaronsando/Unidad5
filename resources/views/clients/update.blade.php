<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<body>
    <form action="{{url('clients/') }}" method="post">
        @method ('PUT');
        @csrf
        <label>Nombre</label>
        <input type="text" name="name" placeholder="fulanito" value="{{$client->name}}">
        <br><hr>

        <label>Correo</label>
        <input type="email" name="email" placeholder="fulanito@hotmail.com" value="{{$client->email}}">
        <br><hr>

        <label>Phone</label>
        <input type="" name="phone_number" placeholder="612xxxx" value="{{$client->phone_number}}">
        <br><hr>
        <input type="hidden" name="id" value="{{$client->id}}">

        <button type="submit">Enviar</button>

    </form>
</body>
    
</body>
</html>