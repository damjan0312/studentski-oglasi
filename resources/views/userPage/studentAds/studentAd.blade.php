@extends($login)

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/studentAd.css')}}">

<div class="row">
    <div class="col-sm-12">
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
            <p class="text-center w-30">
            <small>** Pretrazite Studentske Oglase po Kategoriji </small>
            <form class="text-center" method="POST" action="searchStudentAds">
                @csrf
                <div class="d-flex justify-content-center">
                    <select class="form-control-lg" name="category">
                        <option value="">Pretrazite Oglase</option>
                        <option value="Prodaja Knjiga">Prodaja Knjiga</option>
                        <option value="Trazim Cimera">Trazim Cimera</option>
                        <option value="Privatni Casovi">Privatni Casovi</option>
                        <option value="Ostalo">Ostalo</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <button
                    id="search-button" 
                    class="btn btn-lg"
                    style="background-color: #ef681a"
                    > PRETRAZI </i> </button>
                </div>
                
                
            </form>
            </p>
        </div>
        <hr>

        @if($indicator!=1)
        <div class="ads-div row">
            <div id="newest-ads" class="col-sm-12">
           

                <p class="h2 pl-4">
                    NAJNOVIJI OGLASI <i class="fas fa-ad" style="color: rgb(228, 91, 12);"></i>
                </p>
                <p class="pl-4">
                   <small>**Poredjani od najnovijih do najstarijih</small>
                </p>
                <div class="row">
                    @foreach ($ads as $ad)
                    <div class="col-md-3 text-center">

                        <div class="ad p-3">   <!-- pocetak kartice -->

                                        <div 
                                        id="cards"
                                        class="card p-2 text-dark" 
                                        style="border: 2px solid lightgray; border-radius: 20px; background-color: #eaeaea;"
                                        >

                                        <div class="card-block">
                                        <i class="fas fa-user-graduate fa-2x float-left" style="color: #bfbdbd"></i>
                                        <i class="fas fa-ad fa-2x float-right" style="color: #EC6313"></i>
                                        <h4 class="card-title font-weight-bold">{{$ad->headline}}</h4>
                                        <hr>
                                        <p class="card-text"><b>Opis oglasa:</b> <br/>{{$ad->description}}</p>
                                        <hr/>
                                        
                                        <p>Kontakt: {{$user->phoneNumber}}</p>
                                        <p id="ad-updated-text" class="text-dark"><small>Postavio: <a  id="user" href="/pregledProfila/{{$user->id}}">{{$user->name." ".$user->last_name }}</a></small></p>

                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <small>
                                                    <p class="card-text">
                                                        <b>Postavljen:</b> 
                                                        <br/>{{$ad->dateCreated}}
                                                    </p>
                                                </small>

                                            </div>
                                            <div class="col-sm-6">
                                                <small>
                                                    <p>
                                                        <b>Istice:</b> 
                                                        <br/>{{$ad->dateExpired}}
                                                    </p>
                                                </small>
                                            </div>

                                        </div>
                                        </div>
                                        </div>
                            </div>

                        </div><!-- kraj kartice -->
                        @endforeach

                </div>



            </div>

        </div>
        @else
        
        <div id="search-list" class="newest-ads">
        <a class="ml-5" href="{{route('studentAd')}}">Ocisti rezultate pretrage</a>
                    <div class="row">
                       
                        <p class="h1 ml-5 mt-2 nowrap">REZULTATI PRETRAGE <i style="color: rgba(236, 99, 19);"
                        class="far fa-eye"></i></p>
                    </div>
                    <hr>
                    <div class="row">

                        @if(count($ads) == 0)
                        <p class="text-dark display-4 pl-5"> Nema Rezultata Pretrage <i style="color: rgba(236, 99, 19);"
                                class="fas fa-frown"></i></p>
                        @else
                        @foreach ($ads as $ad)
                        <div class="col-md-3 text-center">
                            <div class="ad p-3">

                
                            <div class="ad p-3">   <!-- pocetak kartice -->

                                    <div 
                                    id="cards"
                                    class="card p-2 bg-light text-secondary" 
                                    style="border: 2px solid lightgray; border-radius: 20px;"
                                    >

                                    <div class="card-block">
                                    <i class="fas fa-ad fa-2x float-right" style="color: #EC6313"></i>
                                    <h4 class="card-title font-weight-bold">{{$ad->headline}}</h4>
                                    <hr>
                                    <p class="card-text"><b>Opis oglasa:</b> <br/>{{$ad->description}}</p>
                                    <hr/>

                                    <p>Kontakt: {{$user->phoneNumber}}</p>
                                    <p id="ad-updated-text" class="text-dark"><small>Postavio: <a  id="user" href="/pregledProfila/{{$user->id}}">{{$user->name." ".$user->last_name }}</a></small></p>

                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <small>
                                                <p class="card-text">
                                                    <b>Postavljen:</b> 
                                                    <br/>{{$ad->dateCreated}}
                                                </p>
                                            </small>

                                        </div>
                                        <div class="col-sm-6">
                                            <small>
                                                <p>
                                                    <b>Istice:</b> 
                                                    <br/>{{$ad->dateExpired}}
                                                </p>
                                            </small>
                                        </div>

                                    </div>
                                    </div>
                                    </div>
                                    </div>

                                    </div><!-- kraj kartice -->
            </div>
            @endforeach
            @endif
        </div>
        </div>

        @endif;


</div>


</section>

</div>


    </div>
</div>



<script src="{{asset('assets/js/login.js')}}"></script>
@endsection