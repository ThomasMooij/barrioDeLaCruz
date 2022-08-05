<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Document</title>
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
                            <a href="{{ asset('reserve') }}" class="nav-link">volver a pagina principal</a>
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
                    <h1>{{ $class->title }}</h1>
                    <p class="lead">Aqui encuentra mas informacion sobre la clase: {{ $class->title }}</p>
                </div>
            </div>
        </div>
    
    </section>

{{-- Images slider --}}

<section>

    <div class="d-sm-flex justify-content-center">
        
        <div class="container">
            <div class="row text-center">
                <h2 style="font-style: italic;" class="py-3"> Lo que hacemos:</h2>
                <p class="lead py-3">{{ $class->descriptionshow }}</p>
            </div>
            <div class="row text-center">
                <h3 style="font-style: italic;" class="py-3"> detalles importantes:</h3>
                <p class="lead">Precio: {{ $class->price }} euro</p>
                <p class="lead">Horario: {{ $class->timetable }}</p>
                <div class="py-5">
                <button class="btn btn-primary ""><a href={{ url("reservation",$class->id) }} class="text-light" style="text-decoration: none;"> Haz reserva</a></button>
            </div>
            </div>
           
        </div>
        
    </div>
</section>

 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>