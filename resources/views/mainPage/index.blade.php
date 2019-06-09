@extends($login)

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/index.css')}}">




<div class="home-container">

    <section id="search-section">

        <div class="dark-overlay row justify-content-center align-items-center">
            <form class="" method="POST" action="search">
                @csrf
                <div class="search-container container text-dark p-3 row justify-content-center align-items-center">


                    <div class="row flex-nowrap">


                        <div class="col-sm-3 ">
                            <div class="form-group">
                                <b>KATEGORIJA</b>
                                <select class="custom-select my-select" name="category">
                                    <option value=""></option>
                                    <option value="stan">Stan</option>
                                    <option value="kuca">Kuca</option>
                                    <option value="soba">Soba</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <b>OPSTINA</b>
                                <select class="custom-select my-select" name="community">
                                    <option value=""></option>
                                    <option value="Medijana">Medijana</option>
                                    <option value="Pantelej">Pantelej</option>
                                    <option value="Crveni Krst">Crveni Krst</option>
                                    <option value="Palilula">Palilula</option>
                                    <option value="Niska Banja">Niska banja</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <b>CENA OD:</b>
                                <input class="form-control" type="text" placeholder="EUR" name="priceFrom">
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <b>CENA DO:</b>
                                <input class="form-control" type="text" placeholder="EUR" name="priceTo">
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <button id="search-button" class="btn btn-lg btn-search"><b>PRETRAZI</b></button>
                    </div>


                </div>
            </form>

        </div>
    </section>

    <section id="ad-section" class="text-dark ">
    

        @if($indicator!=1)
        <div id="ordinary-list">
            <!-- pocetak dela koji se sklanja klikom na search -->


            <div class="newest-ads">
                <div class="row">
                    <p class="h1 ml-5 mt-2 nowrap">NAJNOVIJI OGLASI <i class="fas fa-ad"
                            style="color: rgb(228, 91, 12);"></i></p>
                </div>
                <hr>
                <div class="row" id="newest-ads-row">


                    @foreach ($ads as $ad)
                    <div class="col-md-3 text-center">
                        <a href="/oglas/{{$ad->id}}" style="color: inherit; text-decoration:none;">
                        <div class="ad p-3">
                            <!-- pocetak kartice -->
                            <div class="card p-2">
                                <div class="price-div">
                                    <b class="float-right pl-2"> {{$ad->price}}</b>
                                    <i class="fas fa-tags float-right "></i>

                                </div>
                                <img class="card-img-top img" src="{{URL::to('/')}}/images/{{$ad->id}}_0.jpg"
                                    alt="Card image cap">

                                <div class="card-block">
                                    <h4 class="card-title font-weight-bold">{{$ad->headline}}</h4>
                                    <hr>
                                    <p class="card-text">{{$ad->description}}</p>
                                    <a id="ad-link" href="/oglas/{{$ad->id}}">Pogledaj oglas</a>
                                </div>
                            </div>
                        </div>
                        </a>
                        <!-- kraj kartice -->
                    </div>
                    @endforeach



                </div>


            </div>
            <!-- koristi isti css newewst-ads -->
            <div id="popular-ads" class="newest-ads">
                <div class="row">
                    <p class="h1 ml-5 mt-2 nowrap">NAJPOVOLJNIJI OGLASI <i class="fas fa-fire"
                            style="color: rgb(228, 91, 12);"></i></p>
                </div>
                <hr>
                <div class="row" id="newest-ads-row">

                    @foreach ($lowestPrice as $ad)
                    <div class="col-md-3 text-center">
                        <a href="/oglas/{{$ad->id}}" style="color: inherit; text-decoration:none;">
                        <div class="ad p-3">

                            <!-- pocetak kartice -->
                            <div class="card p-2">

                                <div class="price-div">
                                    <b class="float-right pl-2"> {{$ad->price}}</b>
                                    <i class="fas fa-tags float-right "></i>

                                </div>

                                <img class="card-img-top img" src="{{URL::to('/')}}/images/{{$ad->id}}_0.jpg"
                                    alt="Card image cap">

                                <div class="card-block">
                                    <h4 class="card-title font-weight-bold">{{$ad->headline}}</h4>
                                    <hr>
                                    <p class="card-text">{{$ad->description}}</p>
                                    <a id="ad-link" href="/oglas/{{$ad->id}}">Pogledaj oglas</a>
                                </div>
                            </div>
                        </div>
                        </a>
                        <!-- kraj kartice -->
                    </div>

                    @endforeach


                </div>

            </div> <!-- kraj dela koji se sklanja klikom na search -->
            @else

            <div id="search-list" class="newest-ads">
            <a href="/index" class="pl-4" style="color: rgba(236, 99, 19); text-decoration:none;">Ocisti rezultate pretrage</a>
                <div class="row">
              
                    <p class="h1 ml-5 mt-2 nowrap">REZULTATI PRETRAGE <i style="color: rgba(236, 99, 19);"
                            class="fas fa-search"></i></p>
                </div>
                <hr>
                <div class="row" id="newest-ads-row">

                    @if(count($ads) == 0)
                    <p class="text-dark display-4 pl-5"> Nema Rezultata Pretrage <i style="color: rgba(236, 99, 19);"
                            class="fas fa-frown"></i></p>
                    @else
                    @foreach ($ads as $ad)
                    <div class="col-md-3 text-center">
                    <a href="/oglas/{{$ad->id}}" style="color: inherit; text-decoration:none;">
                        <div class="ad p-3">

                            <!-- pocetak kartice -->
                            <div class="card p-2">

                                <div class="price-div">
                                    <b class="float-right pl-2"> {{$ad->price}}</b>
                                    <i class="fas fa-tags float-right "></i>

                                </div>

                                <img class="card-img-top img" src="{{URL::to('/')}}/images/{{$ad->id}}_0.jpg"
                                    alt="Card image cap">

                                <div class="card-block">
                                    <h4 class="card-title font-weight-bold">{{$ad->headline}}</h4>
                                    <hr>
                                    <p class="card-text">{{$ad->description}}</p>
                                    <a id="ad-link" href="/oglas/{{$ad->id}}">Pogledaj oglas</a>
                                </div>
                            </div>
                        </div>
                        <!-- kraj kartice -->
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>

            @endif;










    </section>




</div>

<script src="{{asset('assets/js/login.js')}}"></script>




@endsection