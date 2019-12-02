<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pruebas Wellcome</title>

    <!--CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/list-restaurant.css') }}"> 
</head>
<body>
    <div class="container-fluid">
        <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" style="width:100%">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('frontend/images/food1.jpg') }}" alt="" data-holder-rendered="true" style="width: 900px; height: 400px;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('frontend/images/food3.jpg') }}" alt=""  style="width: 900px; height: 400px;">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          
        

        {{-- 1.Barra de navegacion --}}
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img id="logo" src="{{ asset('frontend/images/Logo_main.png') }}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarWelcome" 
                    aria-controls="navbarWelcome" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>        
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarWelcome">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">acerca de</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">lista de restaurantes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ubicaciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="modal" 
                                    data-target="#staticBackdrop">inicio de sesion</a>
                            </li>
                            {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                            </li> 
                            <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                                Disabled</a>
                            </li>--}}
                        </ul>
                    </div>
                </nav>
            </div>  
        </div>

        

        {{-- 2.Acerca de --}}
        <div class="row" id="acerca-de">
            <img src="{{ asset('frontend/images/icons/about_color.png') }}" alt="acerca-de" 
            class="img-responsive section-icon d-none d-lg-block d-xl-block">
            <div class="col about-bg d-none d-lg-block d-xl-block"></div>
            <div class="col about-content">
                <h1 class="content-title">Acerca de</h1>
                <p class="content-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Eius iusto numquam corporis asperiores! Amet iste facere cupiditate eos hic in! Ipsum 
                    earum dolores ducimus similique voluptatum quas ullam quos dolorum.</p>
                <p class="content-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Eius iusto numquam corporis asperiores! Amet iste facere cupiditate eos hic in! Ipsum 
                    earum dolores ducimus similique voluptatum quas ullam quos dolorum.</p>
            </div>
        </div>
    </div>

    {{-- login --}}
  <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" 
aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">INICIO DE SESION</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="">
            @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Usuario</label>
                        <input type="text" class="form-control" name="usuario" value="{{ old('email') }}"
                        required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Clave</label>
                        <input type="password" class="form-control" name="clave" required>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>


    {{-- 3.Lista de Restaurantes --}}
    <section class="container-fluid">
        <div class="row" id="list-filtros">
            <div class="col-md-12 col-offset-1" id="envol-filtros">
                <div class="section-header">
                    <h2 class="rest-title">Lista de restaurantes asociados</h2>
                    <ul class="clearfix" id="list-rest">
                        <li class="filter" data-filter="*">
                            todo
                            <span class="badge badge-primary badge-pill">10</span>
                        </li>
                        <li class="filter" data-filter=".uno">
                            segundo
                            <span class="badge badge-primary badge-pill">11</span>
                        </li>
                        <li class="filter" data-filter=".dos">
                            tercero
                            <span class="badge badge-primary badge-pill">12</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="restaurantes">
            <div class="col col-md-offset-1">
                <ul class="listado" id="lista">
                    <li class="item">
                        <a href="#">
                            <img src="{{ asset('frontend/images/fOOD2.jpg') }}" class="img-responsive" alt="Food"
                            style="width:300px. heigth:369px">
                            <div class="rest-desc text-center">
                                <span>
                                    <h3>Tomato Curry</h3>
                                    Natalie &amp; Justin Cleaning by Justin Younger
                                </span>
                            </div>
                        </a>
                        <h2 class="white">titulo/precio</h2>
                    </li>
                    <li class="item">
                        <a href="#">
                            <img src="{{ asset('frontend/images/food1.jpg') }}" class="img-responsive" alt="Food">
                            <div class="rest-desc text-center">
                                <span>
                                    <h3>Tomato Curry</h3>
                                    Natalie &amp; Justin Cleaning by Justin Younger
                                </span>
                            </div>
                        </a>
                        <h2 class="white">titulo/precio</h2>
                    </li>
                    <li class="item">
                            <a href="#">
                                <img src="{{ asset('frontend/images/fOOD2.jpg') }}" class="img-responsive" alt="Food"
                                style="width:300px. heigth:369px">
                                <div class="rest-desc text-center">
                                    <span>
                                        <h3>Tomato Curry</h3>
                                        Natalie &amp; Justin Cleaning by Justin Younger
                                    </span>
                                </div>
                            </a>
                            <h2 class="white">titulo/precio</h2>
                        </li>
                        <li class="item">
                            <a href="#">
                                <img src="{{ asset('frontend/images/food1.jpg') }}" class="img-responsive" alt="Food">
                                <div class="rest-desc text-center">
                                    <span>
                                        <h3>Tomato Curry</h3>
                                        Natalie &amp; Justin Cleaning by Justin Younger
                                    </span>
                                </div>
                            </a>
                            <h2 class="white">titulo/precio</h2>
                        </li>
                        <li class="item">
                                <a href="#">
                                    <img src="{{ asset('frontend/images/fOOD2.jpg') }}" class="img-responsive" alt="Food"
                                    style="width:300px. heigth:369px">
                                    <div class="rest-desc text-center">
                                        <span>
                                            <h3>Tomato Curry</h3>
                                            Natalie &amp; Justin Cleaning by Justin Younger
                                        </span>
                                    </div>
                                </a>
                                <h2 class="white">titulo/precio</h2>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <img src="{{ asset('frontend/images/food1.jpg') }}" class="img-responsive" alt="Food">
                                    <div class="rest-desc text-center">
                                        <span>
                                            <h3>Tomato Curry</h3>
                                            Natalie &amp; Justin Cleaning by Justin Younger
                                        </span>
                                    </div>
                                </a>
                                <h2 class="white">titulo/precio</h2>
                            </li>
                            <li class="item">
                                    <a href="#">
                                        <img src="{{ asset('frontend/images/fOOD2.jpg') }}" class="img-responsive" alt="Food"
                                        style="width:300px. heigth:369px">
                                        <div class="rest-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                        </div>
                                    </a>
                                    <h2 class="white">titulo/precio</h2>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <img src="{{ asset('frontend/images/food1.jpg') }}" class="img-responsive" alt="Food">
                                        <div class="rest-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                        </div>
                                    </a>
                                    <h2 class="white">titulo/precio</h2>
                                </li>
                </ul>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container-fluid">
            <div class="row" id="ubicaciones">
                <div class="col ubicacion-bg d-none d-lg-block d-xl-block"></div>
                <div class="col ubicacion-content">
                    <h1 class="content-title">Ubicaicones</h1>
                    <p class="content-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eius iusto numquam corporis asperiores! Amet iste facere cupiditate eos hic in! Ipsum 
                        earum dolores ducimus similique voluptatum quas ullam quos dolorum.</p>
                    <p class="content-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eius iusto numquam corporis asperiores! Amet iste facere cupiditate eos hic in! Ipsum 
                        earum dolores ducimus similique voluptatum quas ullam quos dolorum.</p>
                </div>
            </div>
        </div>
    </section>
<div>
        @include('admin.menu.crear')
</div>
    
    

<!--scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
    crossorigin="anonymous"></script>


<script src="{{ asset('frontend/js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

</body>
</html>