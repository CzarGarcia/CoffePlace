<div class="container">
    <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">        
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripción</th>                                
                            <th>Precio</th>  
                            <th>Categoria</th>  
                            <th>Imagen</th>  
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                                                                   
                      @foreach($producto as $pr)
                        <tr>
                            <td>{{$pr->id}}</td>
                            <td>{{$pr->nombre}}</td>
                            <td>{{$pr->descripcion}}</td>
                            <td>{{$pr->precio}}</td>
                            <td>{{$pr->categoria}}</td>
                            <td>
                                <img src="/imagen/{{$pr->imagen}}" alt="{{$pr->imagen}}" width="60px">
                            </td>
                            <td>

                                <a href="{{route('productos.edit', $pr->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                                    <i class="fas fa-pen"></i></a>
                                    <form action="{{ route('productos.destroy', $pr->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                <button class='btn btn-danger btnBorrar'>Borrar</button></div></div>
                            </form>
                            </td>
                        </tr>
                      @endforeach
                                                   
                    </tbody>        
                   </table>                    
                </div>
            </div>
    </div>  
</div>    