<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>La Cruz</title>
    
</head>
<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href="" class="navbar-brand">Barrio de la Cruz</a>
            <button 
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
            
            ><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-5">
                        <a href="#classes" class="nav-link">Clases</a>
                    </li>
                    <ul class="navbar-nav">
                        <li class="nav-item mx-5">
                            <a href="#events" class="nav-link">Eventos</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item mx-5">
                            <a href="#contact" class="nav-link">Contacto</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- About -->
<section class="bg-dark text-light p-5 text-center mb-3">

    <div class="container-xxl">
        <div class="d-sm-flex justify-content-center">
            <div>
                <h1>Sobre nosotros</h1>
                <p class="lead">Nos dedicamos a dar clases economicas y organizar eventos en el barrio para tod@s</p>
            </div>
        </div>
    </div>

</section>

    <!-- classes -->
    <div class="container-xxl">
    <section class="bg-dark text-light py-3" >
        
            <div class="d-sm-flex justify-content-evenly">
                <h3 class="mb-5 mb-md-0"> Nuestras classes</h3>
                <p class="lead">Apuntate ya !</p>
            </div>
        
    
    </section>
</div>


    @include("includes.class")
  

    <!-- events -->
<div class="container-xxl">
  <section class="bg-dark text-light p-4">
        
            <div class="d-sm-flex justify-content-evenly">
                <h3 class="mb-5 mb-md-0"> Nuestros eventos</h3>
                <p class="lead">Guarda la fecha!</p>
            </div>
    </section>
</div>

    <section class="p-5" id="events">
        <div class="container">
            <div class="row text-center">
                <!-- card1 -->
                <div class="row-md">
                    <div class="card">
                        <div class="card-header">
                          Featured
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <!-- card2 -->
                <div class="row-md mt-5">
                    <div class="card">
                        <div class="card-header">
                          Featured
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <!-- card3 -->
                <div class="row-md mt-5">
                    <div class="card">
                        <div class="card-header">
                          Featured
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- events end -->

    <!-- contact -->
<div class="container-xxl">
    <section class="bg-dark text-light p-4">
        
            <div class="d-sm-flex justify-content-center">
                <h3 class="mb-5 mb-md-0"> Pongase en contacto con nosotros!</h3>
            </div>
    </section>
</div>

    <section class="p-3" id="contact">
        <div class="container w-50">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea placeholder="Escribe su mensaje.."class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>
    </section>


 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>