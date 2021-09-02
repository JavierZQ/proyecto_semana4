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
            <td>Serie</td>
            <td>Num_corre</td>
            <td>fecha_rec</td>
            <td>IGV</td>
            <td>Sub Total</td>
            <td>Total</td>
        </tr>
        @foreach($comp as $value)
        <tr>
            <td>{{$value->idcompra}}</td>
            <td>{{$value->serie}}</td>
            <td>{{$value->num_corre}}</td>
            <td>{{$value->fec_rec}}</td>
            <td>{{$value->igv_total}}</td>
            <td>{{$value->sub_total}}</td>
            <td>{{$value->total}}</td>
        </tr>
        @endforeach


    </table>
</body>
</html>