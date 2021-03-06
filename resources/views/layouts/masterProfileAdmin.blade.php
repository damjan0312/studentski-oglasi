<html>

<head>
    <title>Studentski Oglasi</title>

    <link rel="icon" href="https://image.flaticon.com/icons/png/512/183/183338.png">

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/masterProfile.css')}}">

    



    <!-- FONTS GOOGLE-->
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">

    <!-- JQUERY SCRIPT-->
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>



    <!-- BOOTSTRAP SCRIPTS-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</head>
<body>

    <div class="main-content" style="">
    <!-- NAVBAR -->
    <div class="first-Container">

        <nav class="navbar navbar-expand-sm  navbar-dark fixed-top">
            <div class="container">
                <a href="{{route('index')}}" class="navbar-brand text-uppercase"> 
                    <i id="logo-s" class="fab fa-stripe-s fa-2x"> 
                    <i id="logo-o" class="fab fa-osi"></i>

                    </i></a>
                    <span class="navbar-brand mb-0 h1">STUDENTSKI OGLASI - ADMIN</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ml-auto">
                    

                        <li class="nav-item">
                            <a href="{{route('adminPanel')}}"  class="nav-link">+Upravljaj oglasima</a>
                        </li>
                        <li class="nav-item dropdown">
                        
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user-tie"></i>    
                                {{ Auth::user()->name }} <span class="caret"></span>
                                
                            </a>

                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                 <i class="fas fa-sign-out-alt"></i>
                                    {{ __('Odjavi se') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>



                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    @yield('content')
    @include('layouts.footer')
</body>


</html>
