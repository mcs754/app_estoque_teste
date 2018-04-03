<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../css/app.css" rel="stylesheet">
    <title>Pesquisar Produtos</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-2">Pesquisar Produtos</h1>
        @if(count($produtos) == 0)
            <div class="alert alert-danger mt-2">Nenhum produto encontrado com essa descrição!</div>
        @else
        <table class="table mt-2 text-center">
            <tr>
                <th class="text-left">ID</th>
                <th class="text-left">Descrição</th>
                <th class="text-center">Quantidade</th>
                <th class="text-right">Valor</th>
                <th class="text-right">Data de Vencimento</th>
            </tr>
            @foreach($produtos as $p)
                <tr>
                    <td class="text-left">{{$p->id}}</td>
                    <td class="text-left">{{$p->descricao}}</td>
                    <td class="text-center">{{$p->quantidade}}</td>
                    <td class="text-right">{{$p->valor}}</td>
                    <td class="text-right">{{$p->data_vencimento}}</td>
                </tr>
            @endforeach
        </table>
        @endif
    </div>

    <br><br><br>

    <div class="container">
        <h1 class="mt-2">Pesquisa de produtos</h1>
        <form action="/produtos/pesquisar" method="post" class="form-inline mt-2">
            <input type="hidden" name="_token" value="}">
            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <input type="text" id="descricao" name="descricao" class="form-control ml-2">
            </div>
            <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
        </form>
    </div>

</body>
</html>