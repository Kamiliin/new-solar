<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preload" href="https://solarysustentablechile.cl/img/logonav.png" as="image">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" as="script">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="/style.css">
    <style>
 
    #accordionExample {
      position: sticky;
      top: 80px; 
    }   

    
    </style>
  </style>
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
 <!-- comienzo portada  -->

    <div class="container-fluid banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 ">
                    <div id="content">
                        <h1 class="display-4 hidden pb-2">¡Bienvenido a Solar y Sustentable!</h1>
                        <h3 class="no-bold">Brindamos soluciones fotovoltaicas para Empresas e Industrias. </h3>
                        <hr class="my-4 hidden">
                        <p class="hidden pb-2">Evita las alzas de precios proyectadas para este 2024.</p>
                        <p class="lead hidden">
                          <a class="btn btn-custom btn-lg" href="#" role="button">Saber Más</a>
                        </p>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-blue">
        <div class="container py-5">
            <div class="row">
                <div class=" py-md-5 text-center text-white" data-aos="fade-up">
                    <h2>No dude en conocer más sobre nosotros</h2>
                </div>
                <div class="col-12 col-md-7 text-white py-5" data-aos="fade-right">
                    <h3 class="py-4">Beneficios de implementar Paneles solares.</h3>
                    <ol>
                        <li class="pt-3">Disminuye hasta un 100% el consumo de electricidad pagada.</li>
                        <li class="pt-3">Rentabiliza tus gastos operativos.</li>
                        <li class="pt-3">Paga las cuotas del financiamiento con el ahorro de tu cuenta de luz.</li>
                    </ol>
                </div>
                <div class="col-12 col-md-5" data-aos="fade-left">
                    <div class="bg-light p-3 rounded shadow">
                        <form action="procesar_formulario.php" method="POST">
                            <div class="row mb-3">
                                <div class="text-center mb-3">
                                    <h3>Contáctanos</h3>
                                </div>
                                <div class="col">
                                    <label for="inputNombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control input-custom" id="inputNombre" name="inputNombre" placeholder="Nombre" required>
                                </div>
                                <div class="col">
                                    <label for="inputApellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control input-custom" id="inputApellido" name="inputApellido" placeholder="Apellido" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control input-custom" id="inputEmail" name="inputEmail" placeholder="name@example.com" required>
                                </div>
                                <div class="col">
                                    <label for="inputNumero" class="form-label">Número de Contacto</label>
                                    <input type="tel" class="form-control input-custom" id="inputNumero" name="inputNumero" placeholder="Número de Contacto" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputUbicacion" class="form-label">Ubicación</label>
                                <input type="text" class="form-control input-custom" id="inputUbicacion" name="inputUbicacion" placeholder="Ubicación" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                                <textarea class="form-control input-custom" id="exampleFormControlTextarea1" name="exampleFormControlTextarea1" rows="2" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-custom">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 


  <div class="container-fluid p-5 ">
    <div class="container p-md-5">
      <div class="row pb-5">
        <div class="col-md-12 col-lg-5">
        <div class="accordion pt-4" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Energía Solar Hogar

            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>En un mundo que valora la sostenibilidad y la eficiencia energética, es hora de que tu hogar se una a la revolución solar. La energía solar no solo es amigable con el medio ambiente, sino que también te permite ahorrar dinero a largo plazo.</p>
              <div class="text-center py-4">
                <img src="https://solarysustentablechile.cl/img/card1.jpeg" alt="Descripción de la imagen" style="width: 350px" class="img-fluid"> 
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Energía Solar Empresas
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>El futuro de la energía es sostenible y rentable, y tu empresa puede ser parte de esa transformación. La energía solar empresarial es más que una tendencia; es una inversión inteligente que no solo reduce tus costos de energía, sino que también demuestra tu compromiso con la responsabilidad ambiental.</p>
              <div class="text-center py-4">

              <img src="https://solarysustentablechile.cl/img/card2.jpeg" alt="Descripción de la imagen" style="width: 350px" class="img-fluid"> 
              </div>

            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Servicio Técnico
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Como empresa comprometida con la energía solar, entendemos que tu sistema solar es fundamental para mantenerlo funcionando de manera eficiente y sostenible. Es por eso que ofrecemos un servicio técnico de primera calidad, diseñado para garantizar el máximo rendimiento y la durabilidad de tus instalaciones solares en tu residencia.</p>             
                <div class="text-center py-4">

                <img src="https://solarysustentablechile.cl/img/card2.jpeg" alt="Descripción de la imagen" style="width: 350px" class="img-fluid"> 
                </div>
              </div>
          </div>
        </div>
      </div>
        </div>

        <div class="col-lg-7 col-12 ">
          <div class="row justify-content-center">
            <div class="col-md-6 col-12 pt-5">
              <div class="card mx-auto" style="width: 18rem;">
                  <img src="https://solarysustentablechile.cl/img/1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Asesoría gratuita.</p>
                  </div>
              </div>
            </div>

            <div class="col-md-6 col-12 pt-5">
              <div class="card mx-auto" style="width: 18rem;">
                  <img src="https://solarysustentablechile.cl/img/2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text"> Financiamiento y cierre.</p>
                  </div>
              </div>
            </div>

            <div class="col-md-6 col-12 pt-5">
              <div class="card mx-auto" style="width: 18rem;">
                  <img src="https://solarysustentablechile.cl/img/3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Visita y presupuesto final.</p>
                  </div>
              </div>
            </div>

            <div class="col-md-6 col-12 pt-5">
              <div class="card mx-auto" style="width: 18rem;">
                  <img src="https://solarysustentablechile.cl/img/4.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Instalación y conexión.</p>
                  </div>
              </div>
            </div>

            <div class="col-md-6 col-12 pt-5">
              <div class="card mx-auto" style="width: 18rem;">
                  <img src="https://solarysustentablechile.cl/img/5.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Monitoreo y mantención.</p>
                  </div>
              </div>
            </div>
          </div>

          
        </div>

      </div>
    </div>
  </div>

    <div class="container-fluid   bg-light py-5" id="pagos">
        <div class="container py-5">
              <div class="row">
                <div class="col text-center" data-aos="fade-up" data-aos-duration="1000">
                  <h3 class="fw-bold">Paga tus servicios de manera fácil y segura</h3>
                  <p>Usa Webpay, un método de pago rápido, seguro y confiable.</p>
                </div>
              </div>
              <div class="row py-3">
                <div class="col-lg-6 col-12 pt-2 d-flex justify-content-center align-items-center " >
                    <img src="https://solarysustentablechile.cl/img/webpay.png" alt="" style="width: 350px;">
                </div>
                
                <div class="col-lg-6 col-12 d-flex py-5 justify-content-center align-items-center " >
                    <a href="https://www.webpay.cl/form-pay/171778" class="btn btn-custom btn-lg" role="button">Pagar</a>
                </div>
                
              </div>
        </div>
    </div>


    <div class="container-fluid bg-white">
      <div class="container p-5 text-center ">
        <h2 class="py-5 fw-bold">Nuestros Proveedores</h2>
        
        <section class="logos-slider slider pt-5">
          <div class="slide">
            <img src="https://solarysustentablechile.cl/img/SMA-Solar-Technology-AG_1200x630.jpg" class="logo-img">
          </div>
          <div class="slide">
            <img src="https://solarysustentablechile.cl/img/descarga.png" class="logo-img">
          </div>
          <div class="slide">
            <img src="https://solarysustentablechile.cl/img/Bticino_logo.png" class="logo-img">
          </div>
          <div class="slide">
            <img src="https://solarysustentablechile.cl/img/logo-legrand-sa.svg" class="logo-img">
          </div>
          <div class="slide">
            <img src="https://solarysustentablechile.cl/img/Panasonic_logo_(Blue).svg.png" class="logo-img">
          </div>
          <div class="slide">
            <img src="https://solarysustentablechile.cl/img/Mitsubishi_Electric_logo.svg.png" class="logo-img">
          </div>
        </section>
        
      </div>
    </div>
   


    <footer class="bg-dark text-white ">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-4 mb-3 text-center">
          <img src="https://solarysustentablechile.cl/img/logofooter.png" alt="Logo de la Empresa" class="img-fluid mb-3" style="width:120px">
          <p>Somos una empresa dedicada a ofrecer soluciones de energía solar eficientes y sostenibles para hogares y empresas.</p>
        </div>
        <div class="col-md-4 mb-3 pt-3 ps-lg-5">
          <h5 >SERVICIOS</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white fs-6">Kit Solares</a></li>
            <li><a href="#" class="text-white">Energía solar</a></li>
            <li><a href="#" class="text-white">Hogar</a></li>
            <li><a href="#" class="text-white">Energía solar empresas</a></li>
            <li><a href="#" class="text-white">Servicio técnico</a></li>

          </ul>
        </div>
        <div class="col-md-4 pt-3 mb-3">
          <h5>NOSOTROS</h5>
          <ul class="list-unstyled">
            <li><i class="fas h4 "></i> Dirección: Valparaiso, Viña Del Mar Chile            </li>
            <li><i class="fas h4 "></i> Teléfono: +569 51906473            </li>
            <li><i class="fas h4 "></i> Email: solarysustentable.91@gmail.com            </li>
          </ul>
          
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <p>&copy; 2024 solarysustentablechile. Todos los derechos reservados.</p>
          <div class="d-flex justify-content-center mt-3">
            <img src="https://solarysustentablechile.cl/img/face.png" alt="Facebook" class="mx-2" style="width: 20px; height: 30px;">
            <img src="https://solarysustentablechile.cl/img/int.png" alt="Instagram" class="mx-2" style="width: 30px; height: 30px;">
            <img src="https://solarysustentablechile.cl/img/wt.png" alt="WhatsApp" class="mx-2" style="width: 30px; height: 30px;">
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- WhatsApp Icon Floating -->
<a href="https://wa.me/tu-numero?text=Hola" class="whatsapp-float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>

    
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


  <script>

//logo slider

$('.logos-slider').slick({
slidesToShow: 4,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 1500,
arrows: false,
dots: false,
pauseOnHover: false,
responsive: [{
breakpoint: 768,
settings: {
slidesToShow: 3
}
}, {
breakpoint: 520,
settings: {
slidesToShow: 2
}
}]
});

</script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
    AOS.init();
</script>

  </body>
</html>

