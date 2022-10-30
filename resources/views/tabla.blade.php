<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>TABLA</title>
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
            <div class = "display-6  mt-2 mb-2 text-center"> Autos Registrados </div>
          </div>
          <div class="col-md-12">
            <table class="table table-striped-columns mt-2" style="background-color: #e3f2fd;">
                <thead>
                    <tr>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Año</th>
                        <th scope="col">Version</th>
                        <th scope="col">Precio</th>
                      </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mazda</td>
                    <td>Mx - 5</td>
                    <td>2022</td>                      
                    <td>i Sport</td>
                    <td>$450,900.00</td>
                  </tr>
                  <tr>
                    <td>Mazda</td>
                    <td>Mazda 3 Sedan</td>
                    <td>2022</td>                      
                    <td>i</td>
                    <td>$394,900.00</td>
                  </tr>
                  <tr>
                    <td>Mazda</td>
                    <td>Mazda 3 Hatchback</td>
                    <td>2023</td>                      
                    <td>Signature</td>
                    <td>$552,900.00</td>
                  </tr>
                  <tr>
                    <td>Suzuki</td>
                    <td>Swift</td>
                    <td>2022</td>                      
                    <td>Sport Boosterjet</td>
                    <td>$384,990.00</td>
                  </tr>
                  <tr>
                    <td>Honda</td>
                    <td>Civic</td>
                    <td>2022</td>                      
                    <td>i-Style</td>
                    <td>$535,990.00</td>
                  </tr>
                  <tr>
                    <td>Subaru</td>
                    <td>BRZ</td>
                    <td>2023</td>                      
                    <td>Limited 6MT</td>
                    <td>$739,990.00</td>
                  </tr>
                </tbody>
              </table>
          </div>
          <div>
            <img src="{!! asset('img/car.jpg') !!}" style="width: 400px; height: 250px;">
          </div>
        </div>  



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>

</html>