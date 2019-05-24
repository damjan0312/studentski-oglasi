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

            <div id="add-studentAd" class="text-center">
                <div class="d-flex justify-content-end">
                    <a href="{{route('ad')}}" id="add-studentAdLink"
                        class="btn btn-success btn-lg hover-class">POSTAVI SVOJ OGLAS</a>
                </div>
                <div class="d-flex justify-content-end">
                    <p id="add-studentAdNote" class="hover-class"> <small>*samo za korisnike ulogovane kao
                            studenti</small></p>
                </div>


            </div>


        </div>

    </section>

    <section id="ad-section" class="text-dark">
        <div id="headline">
            <hr>
            <p class="text-center display-4 ">STUDENTSKI OGLASI <i class="fas fa-school ml-2"></i></p>
            <p class="text-center"><small>Ovo su oglasi koje mogu da vide samo prijavljeni studenti</small></p>
        </div>
        <hr>

        <div class="ads-div row">
            <div id="newest-ads" class="col-sm-12">
                <p class="h2">
                    NAJNOVIJI OGLASI <i class="fas fa-ad" style="color: rgb(228, 91, 12);"></i>
                </p>
<div class="row">
                <div class="col-md-3 text-center">
                    <div class="ad p-3">   <!-- pocetak kartice -->

                                    <div class="card p-2">

                                    <div class="card-block">
                                    <h4 class="card-title font-weight-bold">Prodaja knjiga</h4>
                                    <hr>
                                    <p class="card-text">Prodajem knjige za 4.godinu Elektronskog Fakulteta</p>
                                    <a  id="ad-linkk" href="#">Pogledaj oglas</a>
                                    </div>
                                     </div>
                        </div>

                    </div><!-- kraj kartice -->

                    <div class="col-md-3 text-center">
                    <div class="ad p-3">   <!-- pocetak kartice -->

                                    <div class="card p-2">

                                    <div class="card-block">
                                    <h4 class="card-title font-weight-bold">Trazim cimera</h4>
                                    <hr>
                                    <p class="card-text">Stan na bulevaru, 45 kvadrata sa terasom.</p>
                                    <a  id="ad-linkk" href="#">Pogledaj oglas</a>
                                    </div>
                                     </div>
                        </div>

                    </div><!-- kraj kartice -->
</div>



            </div>

        </div>
        <hr>


</div>


</section>

</div>

<script src="{{asset('assets/js/login.js')}}"></script>
@endsection
