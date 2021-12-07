
<!doctype html>
<html lang="en">
  <head>
  	<title>Gestion Commande</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <style>
    .nameuser{
      
    }
    
    .editImage {
    position: absolute;
    bottom: -0px;
    right: 10px;
    background: orange;
    color: #fff;
    text-align: center;
    font-size: 18px;
    font-size: 1.8rem;
    width: 54px;
    height: 54px;
   
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    
}
.nav.nav-tabs + .tab-content {
    background: #ffffff;
    margin-bottom: 20px;
    padding: 20px;
}
.progress.progress-sm .progress-bar {
    font-size: 8px;
    line-height: 5px;
}
img {
  border-radius: 30%;
}

      </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5 mb-5 ">
          <img  src="{{ URL::to('/assets/logo-GestionCommande.jpg')  }}"  >

	        <ul class="list-unstyled components mb-5">
	          <li   class="@if(route('home') == Request::url()) active @endif"  >
	            <a href="{{url('/')}}"  >Home</a>
	          
	          </li>
            <li  class="@if(route('products.index') == Request::url()) active @endif">
              <a href="{{url('/products')}}">Products</a>
	          </li>
	          <li  class="@if(route('commande.index') == Request::url()) active @endif">
	              <a href="{{url('/commande')}}">Commande</a>
	          </li>
	          <!-- <li  class="@if(route('panier.index') == Request::url()) active @endif">
              <a href="{{url('/panier')}}"  >Panier</a>
             
	          </li> -->
	          <li  class="@if(route('menu.index') == Request::url()) active @endif">
              <a href="{{url('/menu')}}">Menu</a>
	          </li>
	          <li  class="@if(route('profil.index') == Request::url()) active @endif">
              <a href="{{url('/profil')}}">Profil</a>
	          </li>
          
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="panier">Panier</a>
                </li> -->
                <li class="nav-item">
                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        @yield('content')
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/assets/images/slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/images/slider2.jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <!-- <div class="row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-8">
        <div class="alert alert-secondary" role="alert">
  Welcome to your app <strong>{{Auth()->user()->name}}</strong> .
</div>
          </div>
          <div class="col-sm-2">
          </div>
      </div> -->

		</div>
  
    
   
    
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/js/popper.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/main.js')}}"></script>
  </body>
</html>

