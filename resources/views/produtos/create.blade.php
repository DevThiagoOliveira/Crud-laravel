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
    <form action="{{route('salvar_produto')}}" method="post">
        @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Nome Produto</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Valor R$</span >
                <input type="number" class="form-control" required name="preco" id="barra-valor">
            </div>
            <div>
                <select class="form-select" name="categoria" required>
                    <option value selected>Categorias</option>
                    <option value="Comida">Comida</option>
                    <option value="Bebida">Bebida</option>
                    <option value="Utilitário">Utilitário</option>
                    <option value="Eletrônicos">Eletrônicos</option>
                    <option value="Outros">Outros</option>
                  </select>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Deixe o seu comentario aqui" id="comentario" name="comentario" style="height: 100px"></textarea>
                <label for="comentario">Comentário</label>
            </div>
            <button type="submit" class="btn btn-success botao" id="botao">Salvar</button>
    </form>
</body>
</html>
