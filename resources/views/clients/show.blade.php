<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <td>
                    #
                </td>
                <td>
                    Name
                </td>
                <td>
                    Email
                </td>
                <td>
                    Phone_number
                </td>
                <td>
                    Actions
                </td>
            </tr>

        </thead>

        <tbody>
            @foreach ($clients as $client)

            <tr>
                <td>
                    {{$client->id}}
                </td>
                <td>
                    {{$client->name}}
                </td>
                <td>
                    {{$client->email}}
                </td>
                <td>
                    {{$client->phone_number}}
                </td>
                <td>
                    <a href="{{url(('clients/update/'.$client->id)) }}">Editar</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

</body>
</html>