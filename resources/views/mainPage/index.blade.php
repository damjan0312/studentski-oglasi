@extends($login)

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/index.css')}}">


<div class="home-container">

        <section id="search-section">

            <div class="dark-overlay row justify-content-center align-items-center">
                    <div class="search-container container text-dark p-3 row justify-content-center align-items-center">
                        <div class="row flex-nowrap">


                    <div class="col-sm-3 ">
                            <div class="form-group">
                                <b>KATEGORIJA</b>
                                <select class="custom-select my-select">
                                    <option value="stan">Stan</option>
                                    <option value="kuca">Kuca</option>
                                    <option value="soba">Soba</option>
                                 </select>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                               <b>OPSTINA</b>
                                <select class="custom-select my-select">
                                    <option value="stan">Medijana</option>
                                    <option value="kuca">Pantelej</option>
                                    <option value="soba">Crveni Krst</option>
                                 </select>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                            <b>CENA OD:</b>
                                <input class="form-control" type="text" placeholder="EUR">
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                            <b>CENA DO:</b>
                                <input class="form-control" type="text" placeholder="EUR">
                            </div>
                        </div>

                        </div>


                        <div class="row">
                            <button class="btn btn-lg btn-search"><b>PRETRAZI</b></button>
                        </div>
                    </div>



            </div>
    </section>


        <section id="ad-section" class="text-dark ">
            <div class="newest-ads">
                <div class="row">
                    <p class="h1 ml-5 mt-2 nowrap">NAJNOVIJI OGLASI  <i class="fas fa-ad" style="color: rgb(228, 91, 12);"></i></p>
                </div>
                <hr>
                <div class="row" id="newest-ads-row">
                    

                    @foreach ($ads as $ad)
                    <div class="col-md-3 text-center">
                    <div class="ad p-3">
                            <!-- pocetak kartice -->
                                    <div class="card p-2">
                                  
                                    <img class="card-img-top img" src="{{URL::to('/')}}/images/{{$ad->id}}_0.jpg" alt="Card image cap">
                                 
                                    <div class="card-block">
                                    <h4 class="card-title font-weight-bold">{{$ad->headline}}</h4>
                                    <hr>
                                    <p class="card-text">{{$ad->description}}</p>
                                    <a  id="ad-link" href="/oglas/{{$ad->id}}">Pogledaj oglas</a>
                                    </div>
                                     </div>
                        </div>
                            <!-- kraj kartice -->
                            </div>
                    @endforeach

                       
                    
                </div>


            </div>
    <!-- koristi isti css newewst-ads -->
            <div id="popular-ads" class="newest-ads">
                <div class="row">
                    <p class="h1 ml-5 mt-2 nowrap">NAJPOVOLJNIJI OGLASI <i class="fas fa-fire" style="color: rgb(228, 91, 12);"></i></p>
                </div>
                <hr>
                <div class="row" id="newest-ads-row">

                @foreach ($lowestPrice as $ad)
                    <div class="col-md-3 text-center">
                    <div class="ad p-3">
                            <!-- pocetak kartice -->
                                    <div class="card p-2">
                                  
                                    <img class="card-img-top img" src="{{URL::to('/')}}/images/{{$ad->id}}_0.jpg" alt="Card image cap">
                                 
                                    <div class="card-block">
                                    <h4 class="card-title font-weight-bold">{{$ad->headline}}</h4>
                                    <hr>
                                    <p class="card-text">{{$ad->description}}</p>
                                    <a  id="ad-link" href="/oglas/{{$ad->id}}">Pogledaj oglas</a>
                                    </div>
                                     </div>
                        </div>
                            
                    </div><!-- kraj kartice -->
                        
                    @endforeach

                
                </div>
            


        </section>


</div>

<script src="{{asset('assets/js/login.js')}}"></script>




@endsection
