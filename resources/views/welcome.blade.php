<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url("assets/css/bootstrap.min.css")}}">

    <title>inicio</title>
  </head>
  <body>
      <div>
            <h1 class="text-center" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Crud</h1>
      </div>
      <div class="d-flex justify-content-center">
        <div class="p-2 bd-highlight"><a href="{{ route('inserir_produtos')}}"><button type="button" class="btn btn-primary">Inserir Produto</button></a></div>
        <div class="p-2 bd-highlight"><a href="{{ route('mostrar')}}"><button type="button" class="btn btn-primary">Ver Tabela ou Deletar</button></a></div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
