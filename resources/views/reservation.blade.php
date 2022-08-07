<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ url("reserve.css") }}">
  <script src="{{ url("reserve.js") }}" defer></script>
</head>
<body>

  @if($limitCount > 2){
  <div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">

    <h1 class="text-light"> No quedan plazas, lo sentimos!</h1>
          </div>
      </div>
    </div>
</div>
} @else {
  <div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                  
                    <h3>Formulario de registracion {{ $class->title }}</h3>

                    <form class="requires-validation" method="POST" action={{ url("/classreg", $class->id) }} enctype="multipart/form-data" novalidate>

                      @csrf 
                        <div class="col-md-12">
                           <input class="form-control" type="text" name="name" placeholder="Su nombre completo" required>
                           <div class="invalid-feedback">Este campo es obligatorio</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="email" name="email" placeholder="Su correo electronico" required>
                             <div class="invalid-feedback">Este campo es obligatorio</div>
                        </div>

                        <div class="col-md-12">
                          <input class="form-control" type="phone" name="phone" placeholder="Su numero de telefono" required>
                           <div class="invalid-feedback">Este campo es obligatorio</div>
                      </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label">I confirm that all data are correct</label>
                     <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                    </div>
              
                      <input type="text" value="{{ $class->title }}" name="class" hidden>

                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Register</button>
                        </div>
                        <div class="form-button mt-3">
                          <button class="btn btn-primary"><a class="text-light" style="text-decoration: none;"  href="/">Volver a pagina principal</a></button>
                      </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
}
@endif
    
</body>
</html>