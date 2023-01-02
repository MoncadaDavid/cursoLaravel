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
                   Nuevo Productos
                   <a href="{{route('products.create')}}" class="btn btn-success btn-sm float-right"> Nuevo Producto </a>
               
                </div>
                
           <div class="card-body">
                @if(session('info'))
                    <div class = "alert alert.succes">
                      {{session ('info')}}
                    </div>
                @endif
                  <table class="table table-hover table-sm">
                     <thead>
                        <th> Descripción </th>
                        <th> Precio </th> 
                        <th> Accion </th>
                 </thead>
                 <tbody>
                     @foreach ($products as $product)
                         <tr>
                             <td>
                             {{ $product->description}}
                            </td>
                            <td>
                            {{ $product->price}}
                            </td>
                            <td>
                            <a href="{{route('products.edit', $product->id) }}" class="btn btn-warning btn-sm"> Editar  </a>     
                            
                            <a href="javascript: document.getElementById('delete-{{$product->id}}').submit()" class="btn-danger btn-sm">  Elimniar  </a>
                            <form id="delete-{{$product->id}}" action="{{route('products.destroy',$product->id)}}" method="POST">
                                @method('delete')
                                @csrf
                            </form>
                             </td>
                        </tr>   
                     @endforeach
                 
            </div>
                
            </div>
        </div>
    </div>
</body>
</html>