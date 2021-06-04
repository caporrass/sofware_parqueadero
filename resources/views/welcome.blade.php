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
                 
                
          <li class="menu-has-children"><a href="">Más</a>
            <ul>
              <li><a href="HTML/Misión y Visión.html">Misíon y Visíon</a></li>
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
        parqueo de vehículos (bicicletas, motos y automoviles), ademas ofrecemos la mejor solución posible en 
        términos de capacidad de parqueo, costo, flujo y menor tiempo en la entrega de vehículos<div class="row stats-row">
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

                <p>Realiza el pago con tu tarjeta de crédito y débito desde nuestra plataforma. </p>
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
                Refiere a un amigo y obtén beneficios</h3>

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

                <p>Una vez que reservas tu plaza olvídate de dar vueltas con el coche buscando aparcamiento. </p>
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

                <p>Las Bases de Datos tienen una gran relevancia a nivel personal, pero más si cabe, a nivel empresarial, y se consideran una de las mayores aportaciones que ha dado la informática a las empresas.</p>
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

                <p>Usándo la plataforma gastarías muchísimo menos en combustible y ademas tenemos unos precios de parqueo muy económicos. </p>
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

        <p>SWAC,  es una empresa conformada por personal especializado en las distintas áreas de  la Ingeniería de Sistemas que en conjunto forma esos conocimientos científicos,  actividades y criterios para crear sistemas que satisfagan mejor las  necesidades de la sociedad lo que garantiza nuestra razón social. Con la  implementación de las ideas innovadoras de nuestros trabajadores y con la  implementación de los nuevos avances en las TIC pretendemos genera el mejor  beneficio para las empresas.</p>
</div>

      <div class="portfolio-grid">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img src="img/mantenimiento-de-computadores_clip_image002.jpg" alt="20 px" height="200">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Reparar tu Equipo
                  </h3>

                  <p class="card-text">
                    Sabemos que tu computadora es lo mas importante para tu diario vivir por ello te ofrecemos una reparacion idonea de la misma.
                  </p>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img src="img/rj45a.gif" alt="20 px" height="200">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    La RED
                  </h3>

                  <p class="card-text">
                    Sabemos que la conexion a internet te permite estar mas conectado en un mundo que exige gran demanda de las TIC por ello te ofrecemos una conexion segura y rapida.
                  </p>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img src="img/Mantenimiento.jpg" alt="20 px" height="200">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Realizamos Mantenimiento
                  </h3>

                  <p class="card-text">
                    Sabemos que su computadora personal o laborar es lo mas importante por ello le ofrecemos mantenimiento expecializado.
                  </p>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img src="img/tecnologia-y-nuevos-esquemas-de-negocio_151.jpg" alt="20 px" height="200">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Usos de Herramientas
                  </h3>

                  <p class="card-text">
                    Nuestro compromiso va mas alla que prestar un servico por ello tambien ofrecemos actualizacion de app.
                  </p>
                </div>
              </div></a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img src="img/Mantenimiento-Correctivo.jpg" alt="20 px" height="200">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Diagnostico
                  </h3>

                  <p class="card-text">
                    Relizamos un diagnostico de tu computadora para ver que componentes y con que velocidad funciona lo cual permite saber que tan eficas son.
                  </p>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img  src="img/450_1000.jpg" alt="20 px" height="200">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Diseño de Paginas WEB
                  </h3>

                  <p class="card-text">
                    Sabemos que para cada enpresa lo fundamental es poder vender sus productos de calidad y llegara a mas personas lo cual permitan mejorar cada vez mas.
                  </p>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img src="img/7301495298_8f23577904_h-800x533.jpg" alt="20 px" height="200">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Malware
                  </h3>

                  <p class="card-text">
                    Sabemos que cuando los Malware asechan a tu computadora te pueden ocacionar un gran dolor de cabeza ya que puedes perder toda la informacion que mas te importa.
                  </p>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img alt="" src="img/1-4.jpg" alt="20 px" height="200">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Un Mundo Conectado
                  </h3>

                  <p class="card-text">
                    En un mundo mas conectado tu eres el responsable del como lo usas.
                  </p>
                </div>
              </div></a>
            </div>
          </div>
        </div>
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
                  Conéctate conmigo
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/camilo.porrassantiago"><i class="fa fa-facebook"></i></a> <a href="caporrass@ufpso.edu.co"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>

                <p>
                 Ingeniero de Sistemas y Director de la empresa SWAC Solucionando tu Futuro.
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
                  Conéctate conmigo
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/waddath"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>

                <p>
                  Directora de Talento Humano de la empresa SWAC Solucionando tu Futuro.
                </p>
              </div></a>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img src="img/1005501_951296031573759_807138796723224364_n.jpg" alt="" width="100%" height="350" class="team-img">
              <div class="card-title-wrap">
                <span class="card-title">Jorge Andres Meneses</span> <span class="card-text">Director de Deseño Grafico</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Conéctate conmigo
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/jorge.m.bike"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>

                <p>
                  Director de Diseño Grafico de la empresa SWAC Solucionando tu Futuro.
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
                  Conéctate conmigo
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/Doncel.SARD"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>

                <p>
                  Directora de Desarrollo de la empresa SWAC Solucionando tu Futuro.
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
                <p>solucionandotufuturo@swac.co</p>
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
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
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
                © SWAC</p>
              <div class="credits">
                  
                <a href="#">Copyright © Todos los Derechos Reservados</a></div>
           
            
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
