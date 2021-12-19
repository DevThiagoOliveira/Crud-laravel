<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("assets/css/bootstrap.min.css")}}">
    <title>Cadastrar Novos Produtos</title>
    <style>
        div {
            margin: 10px 20px 10px 30px ;
        }

        #botao{
            margin: 10px 20px 10px 30px;
        }
    </style>
</head>
<body>
    <form action="{{route('atualizar_produto',$produto->id)}}" method="post">
        @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Nome Produto</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{$produto->titulo}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Valor R$</span >
                <input type="number" class="form-control" required name="preco" id="valor" value="{{$produto->preco}}">
            </div>
            <div>
                <select class="form-select" name="categoria" id="categoria" required>
                    <option value="Categorias" {{$produto->categoria == "Categorias" ? "selected='selected" : ""}}>Categorias</option>
                    <option value="Comida"{{$produto->categoria == "Comida" ? "selected='selected" : ""}}>Comida</option>
                    <option value="Bebida"{{$produto->categoria == "Bebida" ? "selected='selected" : ""}}>Bebida</option>
                    <option value="Utilitário"{{$produto->categoria == "Utilitário" ? "selected='selected" : ""}}>Utilitário</option>
                    <option value="Eletrônicos"{{$produto->categoria == "Eletrônicos" ? "selected='selected" : ""}}>Eletrônicos</option>
                    <option value="Outros"{{$produto->categoria == "Outros" ? "selected='selected" : ""}}>Outros</option>
                  </select>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="comentário" id="comentario" name="comentario" style="height: 100px">{{$produto->comentario}}</textarea>
                <label>Comentário</label>
            </div>
            <button type="submit" class="btn btn-primary botao" id="botao">Atualizar</button>
    </form>
</body>
</html>
