@extends($login)

@section('content')


<!-- K O M E N T A R -->

<!-- Sve labele su nazvane lbl_... primer(lbl_headline - naslov oglasa) ---->

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/seeAdPage.css')}}">

<div class="home-container">


    <section id="ad-section" class="text-dark">

        <div id="section-div">

        <div class="ad-headline row">
            <div class="col-sm-6">
             <p id="lbl_headLine" class="h1 pl-3 pt-3 ml-5 "> {{$ad->headline}} </p>
            </div>

            <div class="col-sm-6 p-3">
                     <div class="price-div form-inline icons mr-5">
                          <i class="fas fa-tags fa-2x ml-auto "></i>
                          <div class="price-info form-inline ml-4 mr-1" style="font-size: 2.5em">
                            <label id="lbl_price" for=""> <b>Cena: </b></label>
                            <label id="lbl_priceNum" for="" class="ml-2"> <b> {{$ad->price}} </b></label>
                          </div>

                          <i class="fas fa-euro-sign fa-2x"></i>
                     </div>
            </div>
        </div>

            <div class="row" id="first-row">


                <div id="image-col" class="col-lg-6"> <!-- section for images LEFT -->


                    <div id="slider">

                    <a  class="control_next">></a>
                    <a  class="control_prev"><</a>
                        <a class="control_next">></a>
                        <a  class="control_prev"><</a>

                        <ul>
                        @for ($i = 1; $i < count($pictures); $i++)

                             <li>
                            <img src="{{URL::to('/')}}/images/{{$pictures[$i]}}"/>
                            </li>

                        @endfor
                        </ul>




                    </div>


                    <p id="ad-updated-text" class="text-dark"><small>Kreiran: {{$ad->dateCreated}}</small></p>
                    <p id="ad-updated-text" class="text-dark"><small>Istice: {{$ad->dateExpired}}</small></p>
                    <p id="ad-updated-text" sclass="text-dark"><small>Postavio korisnik: <a  id="user" href="/pregledProfila/{{$user->id}}">{{$user->name." ".$user->last_name }}</a></small></p>
                    <div class="col-sm text-justify" id="description-text">
                    {{$ad->description}}

                    </div>
                </div>


                <div id="info-col" class="col-lg-6"> <!-- section for informations RIGHT -->

                <div class="d-flex row">
                    <div class="form-inline col-sm-5" style="font-size: 1.5em;">
                            <label id="lbl_category" for=""> <b>KATEGORIJA: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> {{$ad->category}} </label>
                     </div>

                </div>
                <hr>
                <div class="d-flex row">
                    <div class="form-inline col-sm-4" style="font-size: 1.5em;">
                            <label id="lbl_location" for=""> <b>LOKACIJA: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> Nis </label>
                    </div>
                    <!-- street and number -->
                    <div class="col-sm-8 row">
                        <div class="form-inline col-sm-6" style="font-size: 1.1em;">
                                <label id="lbl_street" class="text-left" for=""> <b>ULICA: </b></label>
        <!-- test example -->  <label class="ml-4 text-left" for=""> {{$ad->street}} </label>
                        </div>
                        <div class="form-inline col-sm-6" style="font-size: 1.1em;">
                                <label id="lbl_number" for=""> <b>BROJ: </b></label>
        <!-- test example -->  <label class="ml-4" for=""> {{$ad->number}} </label>
                        </div>
                    </div>

                </div>
                <hr>

                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_rooms" for=""> <b>BROJ SOBA: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> {{$ad->numOfRooms}} </label>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_bathrooms" for=""> <b>BROJ KUPATILA: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> {{$ad->numOfBathrooms}} </label>
                    </div>
                </div>


                <hr>
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_heating" for=""> <b>GREJANJE: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> {{$ad->typeOfHeating}} </label>
                    </div>
                </div>

                <hr>
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">

                            <label id="lbl_tv" for=""> <b>TV: </b></label>
    <!-- test example -->  <label class="ml-4" for="">
                            @if( $ad->tv == true)
                                Da
                            @else
                                Ne
                            @endif
                            </label>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_internet" for=""> <b>Internet: </b></label>
    <!-- test example -->  <label class="ml-4" for="">
                            @if( $ad->internet == true)
                                Da
                            @else
                                Ne
                            @endif

                            </label>
                    </div>
                </div>
                <hr>

                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_airCondition" for=""> <b>KLIMA UREDJAJ: </b></label>
    <!-- test example -->  <label class="ml-4" for="">

                            @if( $ad->airCondition == true)
                                Da
                            @else
                                Ne
                            @endif

                            </label>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_parking" for=""> <b>PARKING: </b></label>
    <!-- test example -->  <label class="ml-4" for="">
                           @if( $ad->parking == true)
                                Da
                            @else
                                Ne
                            @endif

                            </label>
                    </div>
                </div>


                </div> <!-- end of information section -->


            </div> <!-- end of row -->

        </div>
    </section>
</div>


<script src="{{asset('assets/js/login.js')}}"></script>
<script src="{{asset('assets/js/imageSlider.js')}}"></script>
@endsection
