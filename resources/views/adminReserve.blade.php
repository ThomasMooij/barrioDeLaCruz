<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Admin reservations</title>
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

    <!-- Header -->
<section class="bg-dark text-light p-5 text-center mb-3">

    <div class="container-xxl">
        <div class="d-sm-flex justify-content-center">
            <div>
                <h3>En esta pagina puede gestionar las reservas</h3>
            </div>
        </div>
    </div>
</section>
    
<section class="py-5">
    <div class="container-sm">
     <div class="d-sm-flex justify-content-center">
 <table class="bg-info">
     <tr>
         <td style="padding:30px">Nombre</td>
         <td style="padding:30px">Email</td>
         <td style="padding:30px">Telefono</td>
         <td style="padding:30px">Clase</td>
         <td style="padding:30px">borrar reserva</td>
         

         
     </tr>
     @forelse($reserve as $reserve)
     <tr align="center">
         <td> <p>{{ $reserve->name }}</p></td>
         <td> <p>{{ $reserve->email }}</p></td>
         <td> <p>{{ $reserve->phone }}</p></td>
         <td> <p>{{ $reserve->class }}</p></td>
         <td> <button onclick= "return confirm('Esta seguro que quiere borrar esta reserva?')"><a href="{{ url('/deletereserve', $reserve->id) }}">Borrar</a></button></td>
     </tr>
     @empty
     <p>No hay reservas</p>
     @endforelse
 </table>
 </div>
 <div class="container my-5">
    <div class="text-center">
 <td><button class="btn btn-danger"   onclick= "return confirm('Esta seguro que quiere borrar esta reserva?')"><a style="text-decoration: none;" class="text-light" href="{{ url('/deletereserveall') }}">Borrar todas</a></button></td>
</div>
</div>
 </div>
 </section>
 {{-- header --}}
 <section class="bg-dark text-light p-5 text-center mb-3">

    <div class="container-xxl">
        <div class="d-sm-flex justify-content-center">
            <div>
                <h3>Aqui esta el record de antiguas reservas</h3>
            </div>
        </div>
    </div>
</section>
{{-- Old reservations --}}
 <section class="py-5">
    <div class="container-sm">
     <div class="d-sm-flex justify-content-center">
 <table class="bg-info">
     <tr>
         <td style="padding:30px">Nombre</td>
         <td style="padding:30px">Email</td>
         <td style="padding:30px">Telefono</td>
         <td style="padding:30px">Clase</td>
      
         

         
     </tr>
     @forelse($old_reserve as $old_reserve)
     <tr align="center">
         <td> <p>{{ $old_reserve->name }}</p></td>
         <td> <p>{{ $$old_reserve->email }}</p></td>
         <td> <p>{{ $old_reserve->phone }}</p></td>
         <td> <p>{{ $old_reserve->class }}</p></td>
     </tr>
     @empty
     <p>No hay reservas</p>
     @endforelse
 </table>
 </div>
 <div class="container my-5">
    <div class="text-center">
 <td><button class="btn btn-danger"   onclick= "return confirm('Esta seguro que quiere borrar esta reserva?')"><a style="text-decoration: none;" class="text-light" href="{{ url('/deletereserveall') }}">Borrar todas</a></button></td>
</div>
</div>
 </div>
 </section>
</body>
</html>