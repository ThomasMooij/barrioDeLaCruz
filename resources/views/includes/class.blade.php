<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">



 
 <section class="p-5" id="classes">
    <div class="container">
        <div class="row text-center">
            <!-- card1 -->

            @forelse($classes as $class)

            <div class="col-md">
                <div class="card" style="width: 18rem;">
                    <img src= "/classimages/{{ $class->image }}" class="card-img-top" alt="..." style="
                    float: left;
                    width:  286px;
                    height: 286px;
                    object-fit: cover;
                    ">
                    <div class="card-body">
                      <h5 class="card-title">{{ $class->title }}</h5>
                      <p class="card-text">{{ Str::limit($class->description , 50) }}</p>
                      <a href="/classShow" class="btn btn-primary">Ver detalles de la clase</a>
                    </div>
                </div>
            </div>
            @empty
            <p>De momento no hay clases</p>
            @endforelse 
            {{ $classes->links() }}
             
        </div>
    </div>
</section>