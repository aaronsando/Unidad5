<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://127.0.0.1:8000/clients" method="post">
        @csrf
        <label>Nombre</label>
        <input type="text" name="name" placeholder="fulanito">
        <br><hr>

        <label>Correo</label>
        <input type="email" name="email" placeholder="fulanito@hotmail.com">
        <br><hr>

        <label>Phone</label>
        <input type="" name="phone_number" placeholder="612xxxx">
        <br><hr>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>