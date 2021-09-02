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
            <td>cod_venta</td>
            <td>cod_producto</td>
            <td>Descripcion</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Total</td>
        </tr>
        @foreach($ventas as $value)
        <tr>
            <td>{{$value->idpventadetalle}}</td>
            <td>{{$value->idventa}}</td>
            <td>{{$value->idproducto}}</td>
            <td>{{$value->descripcion}}</td>
            <td>{{$value->precio}}</td>
            <td>{{$value->cant}}</td>
            <td>{{$value->total}}</td>
        </tr>
        @endforeach


    </table>
</body>
</html>