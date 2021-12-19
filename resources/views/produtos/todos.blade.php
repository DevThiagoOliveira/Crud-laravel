<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("assets/css/bootstrap.min.css")}}">
    <link rel="import" href="ProdutosController.php">
    <title>Exibir Tabelas</title>
</head>
<body>
    <table class="table table-dark table-hover">
        <tr><th>Nome</th><th>Valor</th><th>Categoria</th><th>Comentario</th></tr>
            @foreach($produtos as $produto)
                <tr>
                    <td class="table-dark">{{$produto->titulo}}</td>
                    <td class="table-dark">{{$produto->preco}}</td>
                    <td class="table-dark">{{$produto->categoria}}</td>
                    <td class="table-dark">{{$produto->comentario}}</td>
                    <td class="table-dark"><a href="{{ route('excluir_produto', ['id' $produto->id])}}"><button type="button" class="btn btn-danger">Excluir</button></a></td>
                    <td class="table-dark"><a href="{{ route('editar_produto', ['id' $produto->id])}}"><button type="button" class="btn btn-warning">Editar</button></a></td>
            </tr>
            @endforeach
    </table>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('welcome')}}"><button type="button" class="btn btn-danger">Voltar</button></a>
      </div>
</body>
</html>
