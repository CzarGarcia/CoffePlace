<div class="container-products">
    <!-- Producto 1 -->
    @foreach ($producto as $pr) 
    <div class="card-product">
        <div class="container-img">
            <img src="/imagen/{{$pr->imagen}}" alt="Cafe Irish" />
            <span class="discount">-13%</span>
            <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye"></i>
                </span>
                <span>
                    <i class="fa-regular fa-heart"></i>
                </span>
                <span>
                    <i class="fa-solid fa-code-compare"></i>
                </span>
            </div>
        </div>
        <div class="content-card-product">
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <h3>{{$pr['nombre']}}</h3>
            
      
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $pr->id }}" name="id">
                <input type="hidden" value="{{ $pr->nombre }}" name="nombre">
                <input type="hidden" value="{{ $pr->precio }}" name="precio">
                <input type="hidden" value="{{ $pr->imagen }}"  name="imagen">
                <input type="hidden" value="1" name="quantity">
            
                    <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                </form>
            
       
            <p class="price">Precio: ${{$pr['precio']}} USD</p>
        </div>
    </div>
    @endforeach
</div>
</section>
