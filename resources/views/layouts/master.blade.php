<html>

<head>
    <title>Studentski-Oglasiii</title>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                            <a href="{{route('studentAd')}}" class="nav-link">Pogledaj studentske oglase</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('index')}}" class="nav-link">Pogledaj oglase</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('login')}}" class="nav-link">+Postavi oglas</a>
                        </li>
                        <li class="nav-item ml-2">
                            <a id="signInLink" href="{{route('login')}}" class="nav-link active">
                                <i class="fas fa-user-plus"></i>
                                Prijavi se
                            </a>
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
