<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CONTATO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">

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
    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('assets/images/hero_1.jpg')}}');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mb-4">CONTATO</h1>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section">
    <div class="container">
      <div class="row">
  
        <div class="col-md-12 col-lg-7 mb-5">
  
  
  
          <form action="#" class="contact-form">
  
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Nome Completo</label>
                <input type="text" id="fullname" class="form-control" placeholder="Nome Completo">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Seu email">
              </div>
            </div>
            
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">Mensagem</label>
                <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                  placeholder="Escreva sua Mensagem"></textarea>
              </div>
            </div>
  
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Enviar" class="btn btn-primary py-3 px-4">
              </div>
            </div>
  
  
          </form>
        </div>
  
        <div class="col-lg-4 ml-auto">
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Fale Conosco</h3>
            <p class="mb-0 font-weight-bold text-black">Endereço</p>
            <p class="mb-4 text-black">Rua José Pontes Magalhães - Empresarial JTR, 3731 - Ed. Espanha, Sala 550 , Jatiúca
Maceió - AL
57.036-850</p>
  
            <p class="mb-0 font-weight-bold text-black">Telefone</p>
            <p class="mb-4"><a href="#">(82) 4002-8922</a></p>
  
            <p class="mb-0 font-weight-bold text-black">Email</p>
            <p class="mb-0"><a href="#">suitsadvocacia@gmail.com</a></p>
  
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