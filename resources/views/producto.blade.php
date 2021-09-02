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
            <td>Marca</td>
            <td>Modelo</td>
            <td>Descripcion</td>
            <td>Stock</td>
            <td>Precio</td>
        </tr>
        @foreach($producto as $value)
        <tr>
            <td>{{$value->idproducto}}</td>
            <td>{{$value->marca}}</td>
            <td>{{$value->modelo}}</td>
            <td>{{$value->descripcion}}</td>
            <td>{{$value->stock}}</td>
            <td>{{$value->precio}}</td>
        </tr>
        @endforeach


    </table>
</body>
</html>