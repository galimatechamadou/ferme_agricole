<!DOCTYPE html>
<html lang="en">

<head>
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />
  <link href="{{asset('css/all.css')}}" rel="stylesheet" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
</head>

<body>

  <!-- Navigation -->
  
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/accueil">Accueil</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
      </div>
    </div>
  </nav>


  
  <!-- la page de connexion-->
  <div id="container">
  
        <div id="container"> @yield("create_product ") </div> 
        <div id="container"> @yield("create_parcel ") </div> 
        <div id="container"> @yield("edit_parcel ") </div> 
        <div id="container"> @yield("index_parcel ") </div>

         

               <div id="container">@yield("create_employ") </div> 
  
               <div id="container">@yield("sect_layout")</div> 
                

              <div id="container">
                
              @yield("sect_accueil")

              </div> 
              <div id="container">
                
              @yield("EMP_section")

              </div> 
              <div id="container">
              
              @yield("index_production")
              </div>
              <div id="container">
              
              @yield("section_occupation")

              </div>

              <div id="container">@yield("Product_create")</div>
              <div id="container">@yield("Product_index")</div>
              <div id="container">@yield("Product_edit")</div>
              
              <div id="container">@yield("Employ_create")</div>

              


              <div id="container">
              
              @yield("parcel.index") 

              </div>

              <div id="container">
              
              @yield("DEP_section")

              </div>

              <div id="container">
              
              @yield("sect_Em_edit")
             

              </div>
              <div id="container">
              
              @yield("sect_materiel")
             

              </div>
              <div id="container">
              
              @yield("sect_edit_mat")
             

              </div>

              <div id="container">
              @yield("sect_create_mat")
             </div>
             <div id="container">
              @yield("create_materiel")
             </div>

             <div id="container">@yield("Com_index")</div>
             <div id="container">@yield("Com_create")</div>
             <div id="container">@yield("Com_edit")</div>
   </div> 



 <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; TOUS LES DROITS SONT RESERVES BINANITECH</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('js/app.js')}}"></script>

</body>

</html>