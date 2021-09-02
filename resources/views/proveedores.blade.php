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
            <td>Ruc</td>
            <td>cod_documento</td>
            <td>Numero</td>
            <td>Celular</td>
            <td>Dirección</td>
        </tr>
        @foreach($proveedor as $value)
        <tr>
            <td>{{$value->idproveedores}}</td>
            <td>{{$value->ruc}}</td>
            <td>{{$value->iddocu}}</td>
            <td>{{$value->numero}}</td>
            <td>{{$value->celular}}</td>
            <td>{{$value->direccion}}</td>
        </tr>
        @endforeach


    </table>
</body>
</html>