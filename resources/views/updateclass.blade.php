<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>update</title>
</head>
<body>
    <section class="py-3">
        <div class="container-sm bg-info">
            <div class="d-sm-flex justify-content-center">
                <form action="{{ url('/upload', $class->id) }}" method="post" enctype="multipart/form-data">
    
                    @csrf
    
                    <h3> Editar clase {{ $class->title }}</h3>
                    <div class="py-3">
                        <label for="">Titulo</label>
                        <input type="text" name="title" value="{{ $class->title }}" required>
                    </div>
                    <div class="py-3">
                        <label for="">precio</label>
                        {{-- Type change to num? --}}
                        <input type="text" name="price" value="{{ $class->price }}" required> 
                    </div>
                    <div class="py-3">
                        <label for="">Descripcion</label>
                        <textarea type="textarea" name="description" rows="5"  value="{{ $class->description }}" required></textarea>
                    </div>
                    <div class="py-3">
                        <label>imagen antiguo</label>
                        <img src="/classimages/{{$class->image }}" width="200" height="200">
                    </div>
                    <div class="py-3">
                        <label>imagen nuevo</label>
                        <input type="file" name="image" required>
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