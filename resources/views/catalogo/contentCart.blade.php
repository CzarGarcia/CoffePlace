<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <article class="page type-page status-publish hentry">
      <header class="entry-header"><h1 itemprop="name" class="entry-title">Carrtio</h1></header><!-- .entry-header -->


                    <table class="table">
                        <thead>
                            <tr>
                              <th>Imagen</th>
                                <th class="product-name">Producto</th>
                                <th >Precio</th>
                                <th class="product-quantity">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($cartItems as $item)
                          <tr >


                                <td class="product-thumbnail">
                                    <img src="/imagen/{{ $item->attributes->imagen }}" class="w-20 rounded" alt="Thumbnail">
                                </td>

                                <td data-title="Product" class="product-name">
                                  <p>{{ $item->name }}</p>
                                </td>

                                <td data-title="Price" class="product-price">
                                    <span class="amount"> ${{ $item->price }}</span>
                                </td>

                                <td >
                                  <form action="{{ route('cart.update') }}" method="POST"  style="text-align: center">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id}}" style="width: 0px">
                                  <input type="text" name="quantity" value="{{ $item->quantity }}" style="width: 50px"/>
                                  <button class="btn btn-outline-secondary">Añadir</button>
                                  </form>
                                </td>
                            </tr>
                            @endforeach
                            
                          </tbody>
                        </table>

                        <form action="{{ route('cart.clear') }}" method="POST" style="text-align: center">
                          @csrf
                          <button class="btn btn-outline-secondary" style="align-content: center">Limpiar carrito</button>
                        </form>
             




<br><br>
                
</article>

  </main><!-- #main -->
</div><!-- #primary -->
<br>
<div class="totalCart">

              

  <h2>Total del Carrtio</h2>
<br><br>

              <th>Total </th>
             <span class="amount">: ${{ Cart::getTotal() }}</span>
  <div class="wc-proceed-to-checkout">
<br>
      <a class="checkout-button button alt wc-forward" href="checkout.html">Proceder al Pago</a>
  </div>

</div>