<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container"><br>
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   Crear Productos
                   
               
                </div>
                <div class="card-body">
                    <form action="{{route('products.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="number" class="form-control" name="price">
                        </div> 
                        <button type="submit" class="btn btn-primary"> Guardar</button>
                        <a href="{{route('products.index')}}" class= "btn btn-danger"> Cancelar </a>   
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>