<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" type="text/css" href="app.css" media="screen" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Home</title>

        <!-- Styles -->
        <style>
#container-principal{
    border-radius: 25px;
  border: 2px solid #d3d3d3;
  padding: 20px;
  margin-top: 20px;
}
        </style>

    </head>
    <div class="container" id="container-principal" >
        <h1>Cadastro de Roupas</h1>
        <form method= "post" action = "{{route('cadastro_roupa')}}" >
            @csrf 
  <div class="form-group">
    <label for="modelo">Modelo</label>
    <input type="text" class="form-control" name="modelo"  placeholder="Modelo">
  </div>
  <div class="form-group">
    <label for="cor">Cor</label>
    <input type="text" class="form-control" name="cor" placeholder="Cor">
  </div>
  <div class="form-group">
    <label for="tamanho">Tamanho</label>
    <input type="text" class="form-control" name="tamanho" placeholder="Tamanho">
  </div>
  <div class="form-group">
    <label for="armazenamento">Onde guarda</label>
    <input type="text" class="form-control" name="armazenamento" placeholder="Ex: Gaveta,cabide...">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
        </div>
    </body>
</html>