<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li>HOME</li>
                <li>DADOS PEDIDOS</li>
            </ul>
        </nav>
        <div>
            <h1>Lista de Pedidos</h1>
            <hr>

            <ul>
                @foreach ($dadosOrders as $ordersCliente)

                <li> {{ $ordersCliente}}</li>    
                @endforeach
            </ul>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>COD_PED</th>
                        <th>CLIENTE</th>
                        <th>PRODUTO</th>
                        <th>QUANTIDADE</th>
                        <th>VALOR_PED</th>
                        <th>VALOR_DESC</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>  {{$order['id']}}</td>
                            <td>  {{$order['cod_ped']}}</td>
                            <td>  {{$order['Cliente']}}</td>
                            <td>  {{$order['Produto']}}</td>
                            <td>  {{$order['quantidade']}}</td>
                            <td>  {{$order['valor_ped']}}</td>
                            <td>  {{$order['valor_desc']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>