<?php

namespace App\Http\Controllers;

use App\Models\Producto;
Use Cart;
// Use Darryldecode\Cart\Cart;
Use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {

            $producto = Producto::find($request->id);
            Cart::add(
                $producto->id,
                $producto->nombre,
                $producto->precio,
                1, 
                array("imagen"=>$producto->imagen)
                );
                    
                // return redirect('catalogo.index')->with('success', "$producto->nombre Se registro con exito");
                return back()->with('success', "$producto->nombre Se registro con exito");
    }
    


    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('catalogo/cart', compact('cartItems'));
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }
    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
