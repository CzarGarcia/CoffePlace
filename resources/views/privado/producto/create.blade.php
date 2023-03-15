<div class="container">
    <h1>Productos</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12">            
        <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Agregar</button>    
        </div>    
    </div>    
</div>    


<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formProductos" action="{{route('productos.index')}}" method="POST" enctype="multipart/form-data">
            @csrf    
            <div class="modal-body">
                
                <div class="form-group">
                <label for="id" class="col-form-label">ID:</label>
                <input type="hidden" class="form-control" id="id" name="id" required>
                </div>
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                <label for="descripcion" class="col-form-label">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" >
                </div>                
                <div class="form-group">
                <label for="precio" class="col-form-label">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio">
                </div>            
                <div class="form-group">
                <label for="categoria" class="col-form-label">Categoria:</label>
                <input type="text" class="form-control" id="categoria" name="categoria">
                </div>            

                {{-- imagen --}}


                <div class="grid grid-cols-1 mt-5 mx-5">
                    <img  id="imagenSeleccionada" style="max-height: 200px">
                  </div>

                <div class="grid grid-cols-1 mt-1 mx-2">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Imagen</label>
                    <div class="felx items-center justify-center pt-2">
                      <label class="flex flex-col border-4 border-dashed w-full h-10 hover:bg-gray-100 hover:border-purplr-300 group">
                        <div class='flex flex-col items-center justify-center pt-7'>
                          <svg class="w-5 h-5 text-purple-400 group-hover:text-purple-600" fill:"none" stroke:"currentColor" viewBox="0 0 20 20"></svg>
                          <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'> Selecciona imagen</p>
                        </div> 
                        <input id="imagen" name="imagen" type='file' class="hidden">
                      </label>
                      </div>
                  </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="guardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      

