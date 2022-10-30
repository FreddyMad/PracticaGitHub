<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>FORMULARIO</title>
    </head>

    <body>
        
        <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{route('form')}}">Formulario</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{route('table')}}">Registros</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        
        <div class="container text-center mt-2">
          <div class="col">  
            <div class = "display-6  mt-1 mb-1 text-center"> Nuevo Auto </div>
          </div>
          <div class="card card-boby mt-3 mb-3" style="background-color: #e3f2fd;">
            <form class="row g-3 mt-1" action = "" method="POST">
              <div class="col-12">
                <label class="form-label">Marca</label>
                <input type="text" class="form-control" value="" name="txtMarca" placeholder="Ingresa la marca del auto">
              </div>
              <div class="col-6">
                <label class="form-label">Modelo</label>
                <input type="text" class="form-control" name="txtModelo" placeholder="Ingresa el modelo del auto">
              </div>
              <div class="col-6">
                <label class="form-label">Año</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="txtAno" placeholder="Ingresa el año del auto"> 
                </div>
              </div>
              <div class="col-6">
                <label class="form-label">Versión</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="txtVersion" placeholder="Ingresa la versión del auto">
                </div>
              </div>
              <div class="col-6">
                <label class="form-label">Precio</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="txtPrecio" placeholder="Ingresa el precio del auto">
                  <span class="input-group-text">$</span>  
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-info mb-3" style="width: 100%;">Añadir</button>
              </div>
            </form>
          </div>
          <div>
            <img src="{!! asset('img/car.jpg') !!}" style="width: 400px; height: 250px;">
          </div>
        </div>  



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>

</html>