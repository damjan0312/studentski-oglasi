@extends('layouts.masterProfile')
@section ('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/ad.css')}}">



<section id="ad-section" class="text-dark">

    <div class="dark-overlay">
        <div class="home-inner container">
        <div class="row justify-content-center">
                    <div class="col-lg-12">

                        <div id="cont" class="card text-center card-form">
                            <div class="card-body">
                                    <h3 class="display-5 pb-4 text-center">DODAJ OGLAS </h3>
                                </div>


                                @if ($message = Session::get('success'))

                                  <div class="alert alert-success alert-block">

                                      <button type="button" class="close" data-dismiss="alert">×</button>

                                          <strong>{{ $message }}</strong>

                                  </div>

                                  @endif



                                  @if (count($errors) > 0)

                                      <div class="alert alert-danger">

                                          <strong>Whoops!</strong> There were some problems with your input.

                                          <ul>

                                              @foreach ($errors->all() as $error)

                                                  <li>{{ $error }}</li>

                                              @endforeach

                                          </ul>

                                      </div>

                                @endif
                                <div class="row justify-content-center pb-3">
                                    <button class="btn  btn-lg ml-4 active" id="step1">1. Osnovni podaci</button>
                                    <button class="btn  btn-lg ml-4" id="step2">2. Fotografije</button>
                                    <button class="btn  btn-lg ml-4" id="step3">3. Objava</button>

                                </div>

                                <div>
                                     <button id="btn_next" class="btn float-right" style="display:block;">Dalje</button>
                                     <button id="btn_previous" class="btn float-left" style="display:none;">Nazad</button>
                                </div>


                              <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data" class="pt-5">
                              @csrf
                                <hr>
                                    <div id="basic-info" class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex input-group ml-4 pr-4">
                                            <div class="form-group" style="width: 100%;">
                                                <div class="form-group " style="width: 100%">
                                                <b class="float-left h3"> KATEGORIJA </b>
                                                    <select class="custom-select my-select" name="category">
                                                    <option value="stan">Stan</option>
                                                    <option value="kuca">Kuca</option>
                                                    <option value="soba">Soba</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <hr />



                                        <div class="d-flex input-group ml-4 pr-4">
                                         <b class="float-left h3"> LOKACIJA </b>
                                         <div class="form-group " style="width: 100%">
                                           <b class="float-left h3"> Opstina </b>
                                             <select class="custom-select my-select" name="community">
                                             <option value="Medijana">Medijana</option>
                                             <option value="Pantelej">Pantelej</option>
                                             <option value="Crveni Krst">Crveni Krst</option>
                                             <option value="Palilula">Palilula</option>
                                             <option value="Niska Banja">Niska banja</option>
                                            </select>

                                         </div>
                                            <div class="form-group" style="width: 100%;">
                                                <input type="text" class="form-control form-control{{ $errors->has('street') ? ' is-invalid' : '' }}"
                                                 placeholder="Ulica"  id="street" name="street">

                                                    @if ($errors->has('street'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('street') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>
                                        <div class="d-flex input-group ml-4 pr-4">
                                            <div class="form-group" style="width: 100%;">
                                                <input type="datetime" class="form-control form-control{{ $errors->has('number') ? ' is-invalid' : '' }}"
                                                    placeholder="Broj" name="number" >

                                                    @if ($errors->has('number'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('number') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>
                                        <hr/>

                                        <div class="d-flex ml-4 pr-4">
                                            <div class="form-group " style="width: 100%">
                                        <b class="float-left h4"> BROJ KVADRATA </b>
                                        <input type="text" class="form-control form-control{{ $errors->has('squareFeet') ? ' is-invalid' : '' }}"
                                                    placeholder="Broj kvadrata" name="squareFeet">

                                                    @if ($errors->has('squareFeet'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('squareFeet') }}</strong>
                                                        </span>
                                                    @endif

                                            </div>
                                        </div>



                                        <hr/>

                                        <div class="d-flex ml-4 pr-4">
                                            <div class="form-group " style="width: 100%">
                                        <b class="float-left h4"> BROJ SOBA </b>
                                                <select name="numOfRooms" class="custom-select my-select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="d-flex ml-4 pr-4">
                                            <div class="form-group " style="width: 100%">
                                        <b class="float-left h4"> BROJ KUPATILA </b>
                                                <select name="numOfBathrooms" class="custom-select my-select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                </select>

                                            </div>
                                        </div>

                                        <hr/>

                                        <div class="d-flex ml-4 pr-4">
                                                <div class="form-group " style="width: 100%">
                                            <b class="float-left h4"> GREJANJE </b>
                                                    <select name="typeOfHeating" class="custom-select my-select">
                                                    <option value="Centralno grejanje">Centralno grejanje</option>
                                                    <option value="Elektricna energija">Elektricna energija</option>
                                                    <option value="Cvrsto gorivo">Cvrsto gorivo (drva,pelet,ugalj)</option>
                                                    </select>

                                                </div>
                                        </div>

                                        <hr/>

                                        <div class="d-flex ml-4 pr-4">
                                            <div class="form-group ">
                                            <b class="float-left"> TV </b>
                                            <input id="cb-tv" name="tv" type="checkbox" class="ml-2 form-control{{ $errors->has('tv') ? ' is-invalid' : '' }}" style="float: left; margin-top: 5px;>">
                                                    @if ($errors->has('tv'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('tv') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                            <div class="form-group ml-3">
                                              <b class="float-left"> INTERNET </b>
                                              <input id="cb-internet" name="internet" type="checkbox" class="ml-2 form-control{{ $errors->has('internet') ? ' is-invalid' : '' }}"
                                                style="float: left; margin-top: 5px;>">
                                              @if ($errors->has('internet'))
                                                 <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('internet') }}</strong>
                                                </span>
                                              @endif
                                            </div>
                                            <div class="form-group ml-3">
                                              <b class="float-left"> KLIMA UREDJAJ </b>
                                              <input id="cb-klima"  name="airCondition" type="checkbox" class="ml-2 form-control{{ $errors->has('airCondition') ? ' is-invalid' : '' }}"
                                              style="float: left; margin-top: 5px;>">
                                              @if ($errors->has('airCondition'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('airCondition') }}</strong>
                                                 </span>
                                              @endif
                                            </div>
                                            <div class="form-group ml-3">
                                              <b class="float-left"> PARKING </b>
                                              <input id="cb-parking" name="parking" type="checkbox" class="ml-2 form-control{{ $errors->has('parking') ? ' is-invalid' : '' }}"
                                               style="float: left; margin-top: 5px;>">
                                              @if ($errors->has('parking'))
                                                  <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $errors->first('parking') }}</strong>
                                                    </span>
                                              @endif
                                            </div>
                                        </div>

                                        </div>



                                        <!--!!!!!!!!!!!!!!!!!! KRAJ col-sm-6 prvog -->


                                        <div class="col-md-6 h-50">
                                            <!-- NASLOV OGLASA -->
                                            <div class="d-flex ml-4 pr-4">
                                                <div class="form-group " style="width: 100%">
                                                    <b class="float-left h4"> NASLOV OGLASA </b>
                                                    <input type="text" class="form-control form-control{{ $errors->has('headline') ? ' is-invalid' : '' }}"
                                                                placeholder="" name="headline">

                                                    @if ($errors->has('headline'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('headline') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="d-flex ml-4 pr-4">
                                                <div class="form-group " style="width: 100%">
                                                    <b class="float-left h4"> OPIS </b>
                                                    <textarea type="text" class="form-control form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                                placeholder="" id="description" name="description"> </textarea>
                                                    @if ($errors->has('description'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <hr/>


                                            <div class="d-flex ml-4 pr-4">
                                                <div class="form-group " style="width: 100%">
                                                    <div class="row">
                                                        <b class=" h4 ml-3"> CENA </b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price">
                                                            @if ($errors->has('price'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('price') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <b class=" h4 ml-3"> EUR </b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr/>



                                        </div>



                                        <!-- !!!!!!!!!!!!!!!!!!!! kraj col-md-6 drugog -->

                                <!-- kraj basic - info -->
                                    </div>



                                    <!-- pocetak dela za fotografije -->
                                    <div id="photo-part" class="mt-4" style="display:none;">

                                        <input type="file" name="image[]" class="form-control" multiple>


                                    </div>


                                    <!-- kraj dela za fotografije -->


                                    <!-- pocetak dela za kraj -->

                                    <div id="final-part" class="mt-4" style="display:none;">

                                          <h1>FINAL</h1>

                                    </div>

                                    <!-- kraj dela za kraj -->

                                    <!-- BTN KRAJ-->
                                    <button type="submit" id="submit" class="btn  float-right"
                                    value="Kraj" style="display: none;">Kraj</button>
                                    <!-- prikazati submit dugme tek na 3. tablici-->

                                </form>

                                <!--BTN DALJE-->



                            </div>






                        </div>
                    </div>

                </div>
        </div>
    </div>

</section>
<script src="{{asset('assets/js/ad.js')}}"></script>
<!-- <script src="{{asset('assets/js/uploadNewAd.js')}}"></script> --> <!-- SKRIPTA ZA UPLOAD PODATAKA NA SERVER -->

@endsection('content')
