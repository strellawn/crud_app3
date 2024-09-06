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
                <li>DADOS CLIENTES</li>
            </ul>
        </nav>
        <div>
            <h1>Lista de dados</h1>
            <hr>

            <ul>
                @foreach ($dadosPessoais as $clientsnome)

                <li> {{ $clientsnome}}</li>    
                @endforeach
            </ul>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>SEXO</th>
                        <th>DATA_NASCIMENTO</th>
                        <th>CELULAR</th>
                        <th>EMAIL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>  {{$client['id']}}</td>
                            <td>  {{$client['nome']}}</td>
                            <td>  {{$client['CPF']}}</td>
                            <td>  {{$client['RG']}}</td>
                            <td>  {{$client['sexo']}}</td>
                            <td>  {{$client['Data_nascimento']}}</td>
                            <td>  {{$client['celular']}}</td>
                            <td>  {{$client['email']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>