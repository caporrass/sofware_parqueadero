<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Parqueaderos Inteligentes</title>

        <meta content="" name="keywords">
    <meta content="" name="description">
    
    
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
   
    <body>
        
            <section class="hero">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12">
          
            <a class="hero-brand" href="index.html" title="Home"><img alt="" ></a>
          </div>
        </div>

        <div class="col-md-12">
          <h1>
          Saber escoger el tiempo es ahorrar tiempo.</h1>

          <p class="tagline"><strong></strong></p>
          <a class="btn btn-full" href="#about">Bajar</a>
        </div>
      </div>
      
    </section>
    <!-- /Hero -->
    
  <!-- Header -->
  <header id="header">
    <div class="container">
    
      <div id="logo" class="pull-left">
        <a href="index.html"></a>
      </div>
        
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#about">Inicio</a></li>
          <li><a href="#features">Beneficios</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Equipo de Trabajo </a></li>
	
                
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                        @if (Auth::user()->esAdmin())

                        <a class="nav-link " href="{{ url('/paneladmin') }}" >Administrador</a>
                          @endif
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
            @endif
                 
                
          <li class="menu-has-children"><a href="">M??s</a>
            <ul>
              <li><a href="HTML/Misi??n y Visi??n.html">Mis??on y Vis??on</a></li>
              <li class="menu-has-children"><a href="#">Politicas de Calidad</a>
                <ul>
                  <li><a href="HTML/Politicas de Calidad.html">Politicas de Calidad</a></li>
                  <li><a href="HTML/Servicios.html">Servicios</a></li>
                </ul>
              </li>
          </li>
          <li><a href="#contact">Contactenos</a></li>
        </ul>
        
      </nav>
      
      
    </div>
  </header><!-- #header -->
  
    <!-- About -->

    <section class="about" id="about">
      <div class="container text-center">
        <h2>
          Quienes somos
        </h2>

        <p>Ofrecemos a nuestros clientes soluciones inteligentes de parqueo integrales en cuanto a 
        parqueo de veh??culos (bicicletas, motos y automoviles), ademas ofrecemos la mejor soluci??n posible en 
        t??rminos de capacidad de parqueo, costo, flujo y menor tiempo en la entrega de veh??culos<div class="row stats-row">
      <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">700</span><br>
              Clientes satisfechos</div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">10</span> Parqueaderos vinculados
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">10,463</span> 
Horas de apoyo
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">30</span> 
Buenos trabajadores
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /About -->
    
    <!-- Features -->

    <section class="features" id="features">
      <div class="container">
        <h2 class="text-center">
          
Beneficios de parqueo con nosotros
        </h2>
        
        <div class="row">
          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-credit-card-alt"></span>
                </div>
              </div>

              <div>
                <h3>Pagos Digitales</h3>

                <p>Realiza el pago con tu tarjeta de cr??dito y d??bito desde nuestra plataforma. </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-users"></span>
                </div>
              </div>

              <div>
                <h3>
                Refiere a un amigo y obt??n beneficios</h3>

                <p>Invita tus amigos a parquear con Queo y recibe grandes beneficios.</p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-clock-o"></span>
                </div>
              </div>

              <div>
                <h3>
                  Ahorro de Tiempo</h3>

                <p>Una vez que reservas tu plaza olv??date de dar vueltas con el coche buscando aparcamiento. </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-database"></span>
                </div>
              </div>

              <div>
                <h3>
                  Bases de Datos
                </h3>

                <p>Las Bases de Datos tienen una gran relevancia a nivel personal, pero m??s si cabe, a nivel empresarial, y se consideran una de las mayores aportaciones que ha dado la inform??tica a las empresas.</p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-map-marker"></span>
                </div>
              </div>

              <div>
                <h3>
                Estacionar el auto en los parqueaderos que desees</h3>

                <p>Tenemos una amplia variedad de parkings a nivel local</p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-money"></span>
                </div>
              </div>

              <div>
                <h3>
                  Ahorro de Dinero
                </h3>

                <p>Us??ndo la plataforma gastar??as much??simo menos en combustible y ademas tenemos unos precios de parqueo muy econ??micos. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Features -->
    <!-- Call to Action -->

    <section class="cta">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-sm-12 text-lg-left text-center">
            <h2>
              Servicios
            </h2>

            <p>
            Parqueaderos para carros <br>
            Parqueaderos para motocicletas<br>
            Parqueaderos para bicicletas
            </p>
          </div>

          
        </div>
      </div>
    </section>
    <!-- /Call to Action -->
    <!-- Portfolio -->

    <section class="portfolio" id="portfolio">
      <div class="container text-center">
        <h2>
          Portafolio
        </h2>

        <p>Park,  es una empresa conformada por personal especializado en las distintas ??reas de  la Ingenier??a de Sistemas que en conjunto forma esos conocimientos cient??ficos,  actividades y criterios para crear sistemas que satisfagan mejor las  necesidades de la sociedad lo que garantiza nuestra raz??n social. Con la  implementaci??n de las ideas innovadoras de nuestros trabajadores y con la  implementaci??n de los nuevos avances en las TIC pretendemos genera el mejor  beneficio para las empresas.</p>
</div>

     

         
    </section>
    <!-- /Portfolio -->
    <!-- Team -->

    <section class="team" id="team">
      <div class="container">
        <h2 class="text-center">
          Equipo de Trabajo
        </h2>

        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img src="img/IMG-20171007-WA0004 (3).jpg" alt=""  width="100%" height="350"  class="team-img">
              <div class="card-title-wrap">
                <span class="card-title">Camilo Santiago</span> <span class="card-text">Director General</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Con??ctate conmigo
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/camilo.porrassantiago"><i class="fa fa-facebook"></i></a> <a href="caporrass@ufpso.edu.co"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>

                <p>
                 Ingeniero de Sistemas y Director de la empresa Park.
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" width="100%" height="350"  class="team-img" src="img/22448140_1638908586173498_4062752946761151687_n.jpg">
              <div class="card-title-wrap">
                <span class="card-title">Waddath Yokasta Carrazcal</span> <span class="card-text"> Directora de Talento Humano</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Con??ctate conmigo
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/waddath"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>

                <p>
                  Directora de Talento Humano de la empresa Park.
                </p>
              </div></a>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img src="img/1005501_951296031573759_807138796723224364_n.jpg" alt="" width="100%" height="350" class="team-img">
              <div class="card-title-wrap">
                <span class="card-title">Jorge Andres Meneses</span> <span class="card-text">Director de Dese??o Grafico</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Con??ctate conmigo
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/jorge.m.bike"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>

                <p>
                  Director de Dise??o Grafico de la empresa Park.
                </p>
              </div></a>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" width="100%" height="350"  class="team-img" src="img/22780347_1648032868580880_4153330604334879987_n.jpg">
              <div class="card-title-wrap">
                <span class="card-title">Stefany Doncel</span> <span class="card-text">Directora de Desarrollo</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Con??ctate conmigo
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/Doncel.SARD"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>

                <p>
                  Directora de Desarrollo de la empresa Park.
                </p>
              </div></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-title">Contactenos</h2>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-3 offset-lg-2">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Rio de Oro, Cesar-Colombia</p>
              </div>
              
              <div>
                <i class="fa fa-envelope"></i>
                <p>administradorpark@park.co</p>
              </div>
              
              <div>
                <i class="fa fa-phone"></i>3148836278
              -3166591398</div>
              
            </div>
          </div>
          
          <div class="col-lg-5">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center">
                    <button type="submit">Enviar Mensaje</button></div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </section>
      
    <footer class="site-footer">
      <div class="bottom">
        <div class="container">
          <div class="row">

            <div class="col-lg-6 col-xs-12 text-lg-left text-center">
              <p class="copyright-text">
                ?? CAMILO SANTIAGO PARK S.A</p>
              <div class="credits">
                  
                <a href="#">Copyright ?? Todos los Derechos Reservados</a></div>
           
            
          </div>
        
    <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a> 


    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/tether/js/tether.min.js"></script>
    <script src="lib/stellar/stellar.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/easing/easing.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/lockfixed/lockfixed.min.js"></script>
    
    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>
    
    <script src="contactform/contactform.js"></script>
        
    </body>
</html>
