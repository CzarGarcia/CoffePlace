
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{-- icono --}}
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">

  <!-- CSS Files -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/paper-dashboard.css')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
    <title>Cafeteria</title>
</head>
<body>
<br><br><br><br><br>
<form action="{{route('productos.update', $producto->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="id" name="id" readonly value="{{$producto ->id}}" >
        </div>
    </div>
    <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="nombre"value="{{$producto ->nombre}}" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Descripción</label>
      <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="descripcion" value="{{$producto ->descripcion}}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Precio</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="precio" value="{{$producto ->precio}}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Categoria</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="categoria" value="{{$producto ->categoria}}" required>
        </div>
    </div>
{{--     
    <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Imagen</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="imagen" value="{{$producto ->imagen}}" required>
        </div>
    </div> --}}



    
    <div class="grid grid-cols-1 mt-5 mx-7">
      <img src="/imagen/{{$producto ->imagen}}" width="200px" id="imagenSeleccionada">
    </div>
    
    <div class="grid grid-cols-1 mt-5 mx-7">
      <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Imagen</label>
      <div class="felx items-center justify-center pt-7">
        <label class="flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purplr-300 group">
          <div class='flex flex-col items-center justify-center pt-7'>
            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill:"none" stroke:"currentColor" viewBox="0 0 24 24"></svg>
            <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'> Selecciona imagen</p>
          </div> 
          <input id="imagen" name="imagen" type='file' class="hidden" />

        </label>
        </div>
    </div>


    <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Agregar!</button>
</form>
{{-- <th scope="row">{{$pr->id}}</th>
<td>{{$pr->nombre}}</td>
<td>{{$pr->descripcion}}</td>
<td>{{$pr->precio}}</td>
<td>{{$pr->categoria}}</td>
<td>{{$pr->imagen}}</td> --}}

@include('privado.footer')
