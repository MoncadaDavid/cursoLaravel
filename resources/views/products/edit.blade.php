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
                   Editar Productos
                   
               
                </div>
                <div class="card-body">
                    <form action="{{route('products.update',$product->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <input type="text" name="description" value="{{ $product->description}}"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="number" name="price" value="{{ $product->price }}" class="form-control">
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