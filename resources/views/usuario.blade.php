<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <td>Codigo</td>
            <td>Apelido y Nombre</td>
            <td>User</td>
            <td>Pass</td>
            
        </tr>
        @foreach($user as $value)
        <tr>
            <td>{{$value->idusuario}}</td>
            <td>{{$value->ape_nom}}</td>
            <td>{{$value->usu_user}}</td>
            <td>{{$value->usu_pass}}</td>
            
        </tr>
        @endforeach


    </table>
</body>
</html>