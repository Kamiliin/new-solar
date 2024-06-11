<?php
// Esperar 30 segundos antes de redirigir al usuario a index.php
header("refresh: 8; url=index.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
   </head>
  <body>

    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-dark" >
          <div class="container">
            <a class="navbar-brand pb-3" href="#"><img style="width:250px" src="https://solarysustentablechile.cl/img/logonav.png"
                class="img-fluid" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown px-3">
                  <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Inicio
                  </a>
                </li>
                <li class="nav-item dropdown px-3">
                  <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Kit Solares
                  </a>
                  
                </li>
                <li class="nav-item dropdown px-3">
                  <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Empresas
                  </a>
                  
                </li>
                <li class="nav-item dropdown px-3">
                  <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Hogar
                  </a>
                  
                </li>
                <li class="nav-item dropdown px-3 ">
                    <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Pagos On Line
                    </a>
                    
                  </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>


    <div class="container-fluid banner">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center ">
                    <div id="content">
                        <h1 class="display-4 hidden">Muchas gracias por registrarte!</h1>
                        <h3 class="no-bold">:)</h3>
                        <hr class="my-4 hidden">
                        <p class="hidden pb-2">Lo antes posible un especialista lo contactará, nos vemos.</p>
                      
                      </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

