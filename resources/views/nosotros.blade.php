@extends('layouts.app')

@section('content')
    <body>
        <!-- Responsive navbar-->
        
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://p4.wallpaperbetter.com/wallpaper/529/413/206/food-hamburger-fast-food-junk-food-wallpaper-preview.jpg" style="width:900px; height: 300px;"  alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light text-white m-0">SchoolarFoodUT</h1>
                    <p class="text-white m-0" align="justify">
                    Creemos que la calidad está por encima de todo, por eso nos esforzamos en escoger todos los días los mejores ingredientes, que son la base de un producto excelente. Estamos convencidos que el mejor producto se hace con el tiempo necesario, por eso vamos sin prisas, cuidamos cada paso.</p>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">Alegramos corazones por medio de nuestra comida. Esa es nuestra magia.
                </p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Misión</h2>
                            <p class="card-text" align="justify">Ofrecer a los estudiantes productos alimenticios de calidad, nutritivos y saludables; en un ambiente agradable desarrollados por un equipo humano competente, comprometido en proporcionar excelente servicio y satisfacción, generando desarrollo económico social al país y la empresa.</p>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Visión</h2>
                            <p class="card-text" align="justify">Ser reconocidos como la mejor cafetería de prestigio, confiable en comida saludable en donde nuestro compromiso principal sea crear experiencias agradables al paladar de nuestros clientes universitarios.</p>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Valores</h2>
                            <p class="card-text" align="justify">
                                <ul>
                                    <li><b>Profesionalismo:</b> “Hacer todo bien y a la primera”.</li>
                                    <li><b>Espíritu de Servicio:</b> “Actitud Positiva y de Servicio”.</li>
                                    <li><b>Honestidad:</b> “Puntualidad, Responsabilidad”.</li>
                                    <li><b>Calidad:</b> “Satisfacer expectativas y anticiparse a necesidades”.</li>
                                    <li><b>Ética Ambiental:</b> “Conservación de Recursos Renovables”.</li>
                                    <li><b>Humanismo:</b> “Respeto hacia los demás”.</li>
                                    <li><b>Colaboración:</b> “Trabajo en equipo”.</li>
                                </ul>
                            </p>
                        </div>
                        <div class="card-footer" ></center></div>
                    </div>
                </div>
            </div>
        </div>
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