<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Classes</title>
</head>
<body>
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
                        <a href="{{ url('redirects') }}" class="nav-link">volver a administardor</a>
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
                <h3>En esta pagina puede editar, anadir y borrar classes</h3>
            </div>
        </div>
    </div>
</section>

{{-- Class list section --}}

<section class="py-5">
   <div class="container-sm">
    <div class="d-sm-flex justify-content-center">
<table class="bg-info">
    <tr>
        <td style="padding:30px">Nombre de clase</td>
        <td style="padding:30px">Editar</td>
        <td style="padding:30px">Borrar</td>
    </tr>
    @forelse($classes as $class)
    <tr align="center">
        <td> <p>{{ $class->title }}</p></td>
        <td> <button><a href="{{ url('/updateclass', $class->id) }}">editar</a></button></td>
        <td> <button onclick= "return confirm('Esta seguro que quiere borrar esta clase?')"><a href="{{ url('/deleteclass', $class->id) }}">Borrar</a></button></td>
        

    </tr>
    @empty
    <p>No hay clases</p>
    @endforelse
</table>
</div>
</div>
</section>


{{-- Add class section --}}
<section class="py-3">
    <div class="container-sm bg-info">
        <div class="d-sm-flex justify-content-center">
            <form action="{{ url('/uploadClass') }}" method="post" enctype="multipart/form-data">

                @csrf

                <h3> Anadir clase</h3>
                <div class="py-3">
                    <label for="">Titulo</label>
                    <input type="text" name="title" placeholder="Anade el titulo de la clase lo cual es obligatorio" required>
                </div>
                <div class="py-3">
                    <label for="">precio</label>
                    {{-- Type change to num? --}}
                    <input type="text" name="price" placeholder="Si la clase es gratis escriba: Gratis" required> 
                </div>
                <div class="py-3">
                    <label>image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="py-3">
                    <label for="">Descripcion</label>
                    <textarea type="textarea" name="description" rows="5" placeholder="Aproveche de proveer informacion sobre la clase" required></textarea>
                </div>
                <div>
                    <input class="btn btn-primary"type="submit" value="guardar">
                </div>
            </form>
        </div>
    </div>
</section>



</body>
</html>