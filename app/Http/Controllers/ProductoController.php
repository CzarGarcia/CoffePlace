<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        return view('privado.producto.index',compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('privado.producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'nombre'=>'required', 'descripcion'=>'required','precio'=> 'required', 'categoria'=>'required', 'imagen'=>'required|image|mimes:jpeg,png,svg|max:1024'
        ]);
        $producto = $request->all();
        if($imagen = $request->file('imagen')){
            $rutaGuardar ='imagen/';
            $imagenProducto =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen ->move($rutaGuardar,$imagenProducto);
            $producto['imagen']="$imagenProducto";
        }
        var_dump($producto['imagen']);
         Producto::create($producto);
         return redirect()->route('productos.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('privado/producto/edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {

        $request ->validate([
            'nombre'=>'required', 'descripcion'=>'required','precio'=> 'required', 'categoria'=>'required'
        ]);

        
        $prod = $request->all();


        if($imagen = $request->file('imagen')){
            $rutaGuardar ='imagen/';
            $imagenProducto =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen ->move($rutaGuardar,$imagenProducto);
            $prod['imagen']="$imagenProducto";
        }else{
            unset($prod['imagen']);
        }
        // $producto = Producto::find($id);
        // $producto->update($request->all());
        // $producto->save();

        $producto->update($prod);
        return redirect()->route('productos.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        
        // $producto->estatus= 'INACTIVO';
        // $producto->save();


        $producto->delete();


        return redirect()->route('productos.index');
    }

}
