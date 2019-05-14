@extends($login)

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/studentAd.css')}}">

<div class="home-container">
    <section id="welcome-section">

        <div id="welcome-div">

            <p id="welcome-text" class="display-4 text-center">
                Komuniciraj sa ostalim studentima preko <br> <b>STUDENTSKIH OGLASA</b> 
            </p>

            <div id="link-div" class="text-center">
                <a href="#ad-section" id="ad-link" class="btn btn-success btn-lg">VIDI OGLASE</a>
            </div>

           
        </div>

    </section>

    <section id="ad-section" class="text-dark">
        <div id="headline" >
            <hr>
            <p class="text-center display-4 ">STUDENTSKI OGLASI <i class="fas fa-school ml-2"></i></p>
            <p class="text-center"><small>Ovo su oglasi koje mogu da vide samo prijavljeni studenti</small></p>
        </div>
        <hr>
        
        <div class="ads-div row">
            <div id="newest-ads" class="col-md-6">
                <p class="h2 text-center">
                    NAJNOVIJI OGLASI
                </p>



            </div>
            <div id="popular-ads" class="col-md-6">
                <p class="h2 text-center">
                    NAJPOPULARNIJI OGLASI
                </p>
            </div>

        </div>


    </section>

</div>

<script src="{{asset('assets/js/login.js')}}"></script>
@endsection