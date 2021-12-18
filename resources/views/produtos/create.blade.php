<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <title>Cadastrar Novos Produtos</title>
    <style>
        label{
            float: left;
            display: block;
            width: 90px;
        }
    </style>
</head>
<body>
    <form action="">
        @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Nome Produto</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Valor R$</span >
                <input type="number" class="form-control" required name="preco">
            </div>
            <div>
                <select class="form-select" name="categoria" required>
                    <option selected>Categorias</option>
                    <option value="1">Comida</option>
                    <option value="2">Bebida</option>
                    <option value="3">Utilitário</option>
                    <option value="3">Eletrônicos</option>
                    <option value="3">Outros</option>
                  </select>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Deixe o seu comentario aqui" id="comentario" name="comentario" style="height: 100px"></textarea>
                <label for="comentario">Comentario</label>
            </div>
            <button type="button" class="btn btn-success">Salvar</button>
    </form>
</body>
</html>
