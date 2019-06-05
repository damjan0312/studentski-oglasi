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
                @foreach ($ads as $ad)
                <div class="col-md-3 text-center">

                    <div class="ad p-3">   <!-- pocetak kartice -->

                                    <div class="card p-2">

                                    <div class="card-block">
                                    <h4 class="card-title font-weight-bold">{{$ad->headline}}</h4>
                                    <hr>
                                    <p class="card-text">{{$ad->description}}</p>
                                    <hr/>
                                    <p>Kontakt: {{$user->phoneNumber}}</p>
                                    <p id="ad-updated-text" class="text-dark"><small>Postavio korisnik: <a  id="user" href="/pregledProfila/{{$user->id}}">{{$user->name." ".$user->last_name }}</a></small></p>
                                    </div>
                                     </div>
                        </div>

                    </div><!-- kraj kartice -->
                    @endforeach

</div>



            </div>

        </div>
        <hr>


</div>


</section>

</div>

<script src="{{asset('assets/js/login.js')}}"></script>
@endsection