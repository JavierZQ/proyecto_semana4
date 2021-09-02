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
            <td>Apellido y Nombre</td>
            <td>cod_documento</td>
            <td>Numero</td>
            <td>Sexo</td>
            
        </tr>
        @foreach($datos as $value)
        <tr>
            <td>{{$value->idcliente}}</td>
            <td>{{$value->ape_nom}}</td>
            <td>{{$value->iddocu}}</td>
            <td>{{$value->numero}}</td>
            <td>{{$value->sexo}}</td>
          
        </tr>
        @endforeach


    </table>
</body>
</html>