@extends('layouts.app')

@section('content')
    <body>
      
        <!-- Navigation
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>-->
        <!-- Header-->
        <header class=" py-2" style="background: #191507;">
            <div class="container px-4 px-lg-5 my-2">
                <div class="text-center text-white">
                    <h1 class="display-6 fw-bolder">Encuentra el menú de hoy</h1>
                    <p class="lead fw-normal text-white-60 mb-0">¡Saborea diferentes platillos!</p>
                </div>
            </div>
        </header>
           
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/7/75/Quesadilla_2.jpg" style="height: 150px; width: 225px;" alt="..." />
                            <ul class="list-group list-group-flush">

                               <b> <li class="list-group-item" style="text-align: center; ">Quesadillas
                                <p>Precio de:<span class="text-muted text-decoration-line-through">$50.00</span> a
                                    $25.00</p>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                       <b> <p>Calificación   </p></b>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                   
                               </li>
                               </b>
                                <li class="list-group-item"><p><b>Descripción:</b>
                                Queso y tortilla de harina</p>
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="#">Comprar</a>
                                </div>
                                <!--En caso de añadir al carro
                                <div class="text-center" style="padding-top: 10px;"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carro</a>
                                </div>
                                -->
                                 </li>
                            </ul>
                             
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dam.cocinafacil.com.mx/wp-content/uploads/2019/11/torta-light-salmon-ahumado.jpg" style="height: 150px; width: 224px;" alt="..." />
                            <ul class="list-group list-group-flush">

                               <b> <li class="list-group-item" style="text-align: center; ">Torta
                                <p>Precio de:<span class="text-muted text-decoration-line-through">$50.00</span> a
                                    $25.00</p>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                       <b> <p>Calificación   </p></b>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                   
                               </li>
                               </b>
                                <li class="list-group-item"><p><b>Descripción:</b>
                                Torta de jamon</p>
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="/pagar">Comprar</a>
                                </div>
                                <!--En caso de añadir al carro
                                <div class="text-center" style="padding-top: 10px;"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carro</a>
                                </div>
                                -->
                                 </li>
                            </ul>
                             
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpeg;base64,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" style="height: 150px; width: 224px;" alt="..." />
                            <ul class="list-group list-group-flush">

                               <b> <li class="list-group-item" style="text-align: center; ">Cuernitos de jamón
                                <p>Precio de:<span class="text-muted text-decoration-line-through">$50.00</span> a
                                    $25.00</p>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                       <b> <p>Calificación   </p></b>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                   
                               </li>
                               </b>
                                <li class="list-group-item"><p><b>Descripción:</b>
                                Cuernos de rellenos de queso con jamon</p>
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="#">Comprar</a>
                                </div>
                                <!--En caso de añadir al carro
                                <div class="text-center" style="padding-top: 10px;"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carro</a>
                                </div>
                                -->
                                 </li>
                            </ul>
                             
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://t2.rg.ltmcdn.com/es/posts/2/4/8/burritos_de_carne_y_queso_71842_orig.jpg" style="height: 150px; width: 224px;" alt="..." />
                            <ul class="list-group list-group-flush">

                               <b> <li class="list-group-item" style="text-align: center; ">Burritos
                                <p>Precio de:<span class="text-muted text-decoration-line-through">$50.00</span> a
                                    $47.00</p>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                       <b> <p>Calificación   </p></b>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                   
                               </li>
                               </b>
                                <li class="list-group-item"><p><b>Descripción:</b>
                                Tortilla de arina, carne y salsa, verdura</p>
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="/pagar">Comprar</a>
                                </div>
                                <!--En caso de añadir al carro
                                <div class="text-center" style="padding-top: 10px;"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carro</a>
                                </div>
                                -->
                                 </li>
                            </ul>
                             
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://images.aws.nestle.recipes/resized/f10d69e7fede5cd6200a8ddd41b3cb68_hamburguesa-parrillera_708_600.jpg" style="height: 150px; width: 224px;" alt="..." />
                            <ul class="list-group list-group-flush">

                               <b> <li class="list-group-item" style="text-align: center; ">Hamburguesa
                                <p>Precio de:<span class="text-muted text-decoration-line-through">$50.00</span> a
                                    $45.00</p>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                       <b> <p>Calificación   </p></b>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                   
                               </li>
                               </b>
                                <li class="list-group-item"><p><b>Descripción:</b>
                                Pan, lechuga, pepinillos, cangrejo, zapato, captsu, mostaza, crema, mayoneza, jitomate, carne</p>
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="#">Comprar</a>
                                </div>
                                <!--En caso de añadir al carro
                                <div class="text-center" style="padding-top: 10px;"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carro</a>
                                </div>
                                -->
                                 </li>
                            </ul>
                             
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpeg;base64,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" style="height: 150px; width: 224px;" alt="..." />
                            <ul class="list-group list-group-flush">

                               <b> <li class="list-group-item" style="text-align: center; ">Pizza
                                <p>Precio de:<span class="text-muted text-decoration-line-through">$35.00</span> a
                                    $35.99</p>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                       <b> <p>Calificación   </p></b>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                   
                               </li>
                               </b>
                                <li class="list-group-item"><p><b>Descripción:</b>
                                Pizza de peperoni</p>
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="#">Comprar</a>
                                </div>
                                <!--En caso de añadir al carro
                                <div class="text-center" style="padding-top: 10px;"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carro</a>
                                </div>
                                -->
                                 </li>
                            </ul>
                             
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/01_Chilaquiles_verdes_con_frijoles_chinos.jpg/1200px-01_Chilaquiles_verdes_con_frijoles_chinos.jpg" style="height: 150px; width: 225px;" alt="..." />
                            <ul class="list-group list-group-flush">

                               <b> <li class="list-group-item" style="text-align: center; ">Chilaquiles
                                <p>Precio de:<span class="text-muted text-decoration-line-through">$50.00</span> a
                                    $49.99</p>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                       <b> <p>Calificación   </p></b>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                   
                               </li>
                               </b>
                                <li class="list-group-item"><p><b>Descripción:</b>
                                Tortilla picada, salsa verde, frijoles y queso</p>
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="#">Comprar</a>
                                </div>
                                <!--En caso de añadir al carro
                                <div class="text-center" style="padding-top: 10px;"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carro</a>
                                </div>
                                -->
                                 </li>
                            </ul>
                             
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00750105530472L.jpg" style="height: 150px; width: 224px;" alt="..." />
                            <ul class="list-group list-group-flush">

                               <b> <li class="list-group-item" style="text-align: center; ">Agua Natural 1.5lt
                                <p>Precio de:<span class="text-muted text-decoration-line-through">$30.00</span> a
                                    $25.00</p>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                       <b> <p>Calificación   </p></b>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                   
                               </li>
                               </b>
                                <li class="list-group-item"><p><b>Descripción:</b>
                                Es agua natural</p>
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="#">Comprar</a>
                                </div>
                                <!--En caso de añadir al carro
                                <div class="text-center" style="padding-top: 10px;"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carro</a>
                                </div>
                                -->
                                 </li>
                            </ul>
                             
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Footer-->
       <footer class="py-3 bg-dark">
            <div class="container px-4 px-x-5"><p class="m-0 text-center text-white"> &copy; SchoolarFoodUT</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
@endsection
