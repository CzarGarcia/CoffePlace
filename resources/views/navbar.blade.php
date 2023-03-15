</head>
<body>
<header>
    <div class="container-hero">
        <div class="container hero">
            <div class="customer-support">
                <div class="content-customer-support">
                </div>
            </div>
            <div class="container-logo" >
                <i class="fa-solid fa-mug-hot" ></i>
                <h1 class="logo"><a href="{{route('inicio')}}" >Coffe Place</a></h1>
            </div>
            <div class="container-user">
                <a href="{{route('sesion')}}"><i class="fa-solid fa-user"></i></a>
                <a href="{{route('cart.list')}}"><i class="fa-solid fa-basket-shopping"></i></a>
                <div class="content-shopping-cart">
                    <span class="text">Carrito</span>
                    <span class="number">({{ Cart::getTotalQuantity()}})</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-navbar">
        <nav class="navbar container">
            <i class="fa-solid fa-bars"></i>
            <ul class="menu">
                <li><a href="{{route('inicio')}}">Inicio</a></li>
                <li><a href="{{ route('sucursales') }}">Sucursales</a></li>
                <li><a href="{{ asset('catalogo') }}">Catálogo</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>
