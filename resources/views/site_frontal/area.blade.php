<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ÁREA DE ATUAÇÃO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/mediaelementplayer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fl-bigmug-line.css')}}">
    
  
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
  </head>
  <body>
  
    
  
  <div class="site-wrap">

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong class="text-uppercase">Suits<span class="text-primary"></span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li class= @if ($menu == 1) "active" @endif><a href="{{route('home')}}">Home</a></li>
                    <li class= @if ($menu == 2) "active" @endif><a href="{{route('sobre')}}">O escritório</a></li>
                    <li class= @if ($menu == 3) "active" @endif><a href="{{route('area')}}">Área de atuação</a></li>
                    <li class= @if ($menu == 4) "active" @endif><a href="{{route('contato')}}">Contato</a></li>
                    <li class= @if ($menu == 5) "active" @endif><a href="{{route('login')}}">Login</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> 
    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('assets/images/hero_3.jpg')}}');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mb-4">ÁREA DE ATUAÇÃO</h1>
          </div>
        </div>
      </div>
    </div>
    
    
    
    <div class="section-2">
      <div class="container">
        <div class="row no-gutters align-items-stretch align-items-center">
          <div class="col-lg-4">
            <div class="service-1 first h-100" style="background-image: url('{{asset('assets/images/img_1.jpg')}}')">
              <div class="service-1-contents">
                <span class="wrap-icon">
                  <span class="flaticon-balance"></span>
                </span>
                <h2>Direito Tributário</h2>
                <p>O direito tributário é o segmento do direito financeiro que define como serão cobrados dos cidadãos os tributos e outras obrigações a ele relacionadas, para gerar receita para o Estado.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1 h-100" style="background-image: url('{{asset('assets/images/img_2.jpg')}}')">
              <div class="service-1-contents">
                <span class="wrap-icon">
                  <span class="flaticon-law"></span>
                </span>
                <h2>Direito Civil</h2>
                <p>O direito civil é um ramo do direito, que trata de um conjunto de normas que regulam os direitos e obrigações no âmbito privado.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1 h-100" style="background-image: url('{{asset('assets/images/img_3.jpg')}}')">
              <div class="service-1-contents">
                <span class="wrap-icon">
                  <span class="flaticon-courthouse"></span>
                </span>
                <h2>Direito Imobiliário</h2>
                <p>O direito imobiliário é o ramo do direito privado que trata e regulamenta vários aspectos da vida privada, tais quais o condomínio, o aluguel, a compra e venda de imóveis, a usucapião e os financiamentos da casa própria.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="service-1 first h-100" style="background-image: url('{{asset('assets/images/img_1.jpg')}}')">
              <div class="service-1-contents">
                <span class="wrap-icon">
                  <span class="flaticon-balance"></span>
                </span>
                <h2>Direito Penal</h2>
                <p>O direito penal ou direito criminal é a disciplina de direito público que regula o exercício do poder punitivo do Estado, tendo por pressuposto de ação delitos e como consequência as penas.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1 h-100" style="background-image: url('{{asset('assets/images/img_2.jpg')}}')">
              <div class="service-1-contents">
                <span class="wrap-icon">
                  <span class="flaticon-law"></span>
                </span>
                <h2>Direito Administrativo</h2>
                <p>Direito administrativo é um ramo autônomo, dentro do direito público interno, que basicamente se concentra no estudo da Administração Pública e da atividade de seus integrantes.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1 h-100" style="background-image: url('{{asset('assets/images/img_3.jpg')}}')">
              <div class="service-1-contents">
                <span class="wrap-icon">
                  <span class="flaticon-courthouse"></span>
                </span>
                <h2>Direito Previdenciário</h2>
                <p>O direito previdenciário é um ramo do direito público surgido da conquista dos direitos sociais no fim do século XIX e início do século XX. Seu objetivo é o estudo e a regulamentação do instituto seguridade social.</p>
              </div>
            </div>
          </div>

    
          

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
           <p class="text-black-text text-lighten-4">Template Colorlib alterado por Caio Lívio</p>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/mediaelement-and-player.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('assets/js/aos.js')}}"></script>
  

  <script src="{{asset('assets/js/main.js')}}"></script>
    
  </body>
</html>