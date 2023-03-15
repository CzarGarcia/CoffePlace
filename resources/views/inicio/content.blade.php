<section class="banner">
    <div class="content-banner">
        <video id="background-video" autoplay loop muted poster>
            <source src="{{asset('imagenes/video.mp4')}}" type="video/mp4">
            </video>
        <p>Café Delicioso</p>
        <h2>100% Natural <br />Café Fresco</h2>
        <a href="#">Comprar ahora</a>
    </div>
</section>
<main class="main-content">
    <section class="container container-features">
        <div class="card-feature">
            <i class="fa-solid fa-plane-up"></i>
            <div class="feature-content">
                <span>Envío gratuito a nivel nacional</span>
                <p>En pedido superior a $150</p>
            </div>
        </div>
        <div class="card-feature">
            <i class="fa-solid fa-wallet"></i>
            <div class="feature-content">
                <span>Contrareembolso</span>
                <p>100% garantía de devolución de dinero</p>
            </div>
        </div>
        <div class="card-feature">
            <i class="fa-solid fa-gift"></i>
            <div class="feature-content">
                <span>Tarjeta regalo especial</span>
                <p>Ofrece bonos especiales con regalo</p>
            </div>
        </div>
        <div class="card-feature">
            <i class="fa-solid fa-headset"></i>
            <div class="feature-content">
                <span>Servicio al cliente 24/7</span>
                <p>LLámenos 24/7 al 123-456-7890</p>
            </div>
        </div>
    </section>

    <section class="container top-categories">
        <h1 class="heading-1">Mejores Categorías</h1>
        <div class="container-categories">
            <div class="card-category category-moca">
                <p>Café mocca</p>
                <span>Ver más</span>
            </div>
            <div class="card-category category-expreso">
                <p>Expresso Américano</p>
                <span>Ver más</span>
            </div>
            <div class="card-category category-capuchino">
                <p>Capuccino</p>
                <span>Ver más</span>
            </div>
        </div>
    </section>

    <section class="container top-products">
        <h1 class="heading-1">Mejores Productos</h1>

        <div class="container-options">
            <span class="active">Destacados</span>
           
        </div>

        <div class="container-products">
            <!-- Producto 1 -->
            <div class="card-product">
                <div class="container-img">
                    <img src="{{asset('imagenes/cafe-irish.jpg')}}" alt="Cafe Irish" />
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
                    <h3>Cafe Irish</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$4.60 <span>$5.30</span></p>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="card-product">
                <div class="container-img">
                    <img
                        src="{{asset('imagenes/cafe-ingles.jpg')}}"
                        alt="Cafe incafe-ingles.jpg"
                    />
                    <span class="discount">-22%</span>
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
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Cafe Inglés</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$5.70 <span>$7.30</span></p>
                </div>
            </div>
            <!--  -->
            <div class="card-product">
                <div class="container-img">
                    <img
                        src="{{asset('imagenes/cafe-australiano.jpg')}}"
                        alt="Cafe Australiano"
                    />
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
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h3>Cafe Australiano</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$3.20</p>
                </div>
            </div>
            <!--  -->
            <div class="card-product">
                <div class="container-img">
                    <img src="{{asset('imagenes/cafe-helado.jpg')}}" alt="Cafe Helado" />
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
                    <h3>Cafe Helado</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$5.60</p>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <img
            src="{{asset('imagenes/gallery1.jpg')}}"
            alt="Gallery Img1"
            class="gallery-img-1"
        /><img
            src="{{asset('imagenes/gallery2.jpg')}}"
            alt="Gallery Img2"
            class="gallery-img-2"
        /><img
            src="{{asset('imagenes/gallery3.jpg')}}"
            alt="Gallery Img3"
            class="gallery-img-3"
        /><img
            src="{{asset('imagenes/gallery4.jpg')}}"
            alt="Gallery Img4"
            class="gallery-img-4"
        /><img
            src="{{asset('imagenes/gallery5.jpg')}}"
            alt="Gallery Img5"
            class="gallery-img-5"
        />
    </section>

    <section class="container specials">
        <h1 class="heading-1">Especiales</h1>

        <div class="container-products">
            <!-- Producto 1 -->
            <div class="card-product">
                <div class="container-img">
                    <img src="{{asset('imagenes/cafe-irish.jpg')}}" alt="Cafe Irish" />
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
                    <h3>Cafe Irish</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$4.60 <span>$5.30</span></p>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="card-product">
                <div class="container-img">
                    <img
                        src="{{asset('imagenes/cafe-ingles.jpg')}}"
                        alt="Cafe incafe-ingles.jpg"
                    />
                    <span class="discount">-22%</span>
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
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Cafe Inglés</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$5.70 <span>$7.30</span></p>
                </div>
            </div>
            <!--  -->
            <div class="card-product">
                <div class="container-img">
                    <img src="{{asset('imagenes/cafe-viena.jpg')}}" alt="Cafe Viena" />
                    <span class="discount">-30%</span>
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
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h3>Cafe Viena</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$3.85 <span>$5.50</span></p>
                </div>
            </div>
            <!--  -->
            <div class="card-product">
                <div class="container-img">
                    <img src="{{asset('imagenes/cafe-liqueurs.jpg')}}" alt="Cafe Liqueurs" />
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
                    <h3>Cafe Liqueurs</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$5.60</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container blogs">
        <h1 class="heading-1">Últimos Blogs</h1>

        <div class="container-blogs">
            <div class="card-blog">
                <div class="container-img">
                    <img src="{{asset('imagenes/blog-1.jpg')}}" alt="Imagen Blog 1" />
                    <div class="button-group-blog">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <span>
                            <i class="fa-solid fa-link"></i>
                        </span>
                    </div>
                </div>
                <div class="content-blog">
                    <h3>Café en reuniones</h3>
                    <span>29 Noviembre 2022</span>
                    <p>
                        Mientras que los puestos fijos y las oficinas cerradas se encuentran en franca disminución, la variedad de servicios complementarios o amenities que las compañías ofrecen a los empleados va en rápido ascenso. Este aumento en las opciones de esparcimiento en el lugar de trabajo responde a la necesidad que tienen las empresas de atraer y retener a los mejores empleados, por lo cual existe una mayor preocupación para facilitar un ambiente confortable y atractivo.
                    </p>
                    <div class="btn-read-more">Leer más</div>
                </div>
            </div>
            <div class="card-blog">
                <div class="container-img">
                    <img src="{{asset('imagenes/blog-2.jpg')}}" alt="Imagen Blog 2" />
                    <div class="button-group-blog">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <span>
                            <i class="fa-solid fa-link"></i>
                        </span>
                    </div>
                </div>
                <div class="content-blog">
                    <h3>Alta gastronomía en caféterias</h3>
                    <span>29 Noviembre 2022</span>
                    <p>
                        El café es el protagonista de las sobremesas y una parte muy importante de la experiencia gastronómica, capaz de dar un toque gourmet a cualquier comida o cena. Y es que, de la misma manera que un plato puede reflejar el carácter y la genialidad de un chef, esta bebida refleja la capacidad creativa de los maestros cafeteros.
                    </p>
                    <div class="btn-read-more">Leer más</div>
                </div>
            </div>
            <div class="card-blog">
                <div class="container-img">
                    <img src="{{asset('imagenes/blog-3.jpg')}}" alt="Imagen Blog 3" />
                    <div class="button-group-blog">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <span>
                            <i class="fa-solid fa-link"></i>
                        </span>
                    </div>
                </div>
                <div class="content-blog">
                    <h3>Café por las mañanas</h3>
                    <span>29 Noviembre 2022</span>
                    <p>
                        Muchas personas en el mundo no pueden empezar su día sin su taza habitual de café por la mañana. Este hábito que no conoce fronteras demuestra que el café es una de las infusiones más populares del mundo: se consumen 2.250 millones de tazas por día a nivel global, según estimaciones de la Asociación Nacional del Café de los Estados Unidos.

Además de cafeína, el café contiene minerales: magnesio (de gran ayuda para huesos y función muscular saludables), potasio (que desempeña un papel en la presión arterial) y vitamina B3 (necesaria para liberar energía de los alimentos y un sistema nervioso saludable).
                    </p>
                    <div class="btn-read-more">Leer más</div>
                </div>
            </div>
        </div>
    </section>
</main>