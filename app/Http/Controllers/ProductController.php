<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $producto = Producto::all();

        return view('catalogo.index', compact('producto'));
    }
}