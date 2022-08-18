<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
    <script src="https://www.paypal.com/sdk/js?client-id=Ad4w6nhiuXA9411f5uH8DRqIX0ug9Jmj7A8gF-8l9TRKy2ICMOxUEMSuXxodCMzwSWIoTuzCFMY50zzz&currency=MXN"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
            <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">
                    SchoolarFootUT
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li te>
                                <a class="nav-link text-white" href="/menu">
                                        {{ __('Menu de comida') }}
                                    </a>                          

                                    
                                </li>

                                <li>
                                    <a class="nav-link text-white" href="/nosotros">
                                        {{ __('Nosotros') }}
                                    </a>   
                                    
                                </li>
                                <li>
                                    <a class="nav-link text-white" href="/contacto">
                                        {{ __('Contacto') }}
                                    </a> 

                                </li>
                                    </li>
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }}
                                </a>
                                <div class="nav-item" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/perfil">
                                        {{ __('Perfil') }}
                                    </a> 
                                <div class="nav-item" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            
                            </ul>
  </div>
  </div>
  </div>
  </div>
  
  <header class=" py-2" style="background: #191507;">
            <div class="container px-4 px-lg-5 my-2">
                <div class="text-center text-white">
                    
                    <p class="lead fw-normal text-white-60 mb-0">¡Selecciona tu forma de pago!</p>
            
                </div>
            </div>
        </header>
        <br>
        <div class="container">     

<center>
      <img src="https://cdn.icon-icons.com/icons2/2060/PNG/512/pay_money_icon_124565.png">
      <hr>
<div id="paypal-button-container" ></div>
<script>
                    paypal.Buttons({
                        style:{
                            color: 'blue',
                            shape: 'pill',
                            label: 'pay'
                        },
                        createOrder: function(data, actions){
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: 100
                                    }
                                }]
                            });
                        },

                        onApprove: function(data, actions){
                            actions.order.capture().then(function (detalles){
                                alert("Pago exitoso");
                                console.log(detalles);
                                window.location.href="/compras";
                            });
                        },

                        onCancel: function(data){
                            alert("Pago cancelado");
                            console.log(data);
                            history.go(-1);
                        }
                    }).render('#paypal-button-container');
                </script>
                </center>
                </div>      
</html>