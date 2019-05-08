@extends('layouts.masterProfile')
@section ('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/ad.css')}}">

<section id="ad-section" class="text-dark">

    <div class="dark-overlay">
        <div class="home-inner container">
        <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card text-center card-form">
                            <div class="card-body">
                                <h3 class="display-5 pb-4">DODAJ OGLAS</h3>

                                <div class="row justify-content-center pb-3">
                                    <button class="btn  btn-lg ml-4 active" id="step1">1. Osnovni podaci</button>
                                    <button class="btn  btn-lg ml-4" id="step2">2. Fotografije</button>
                                    <button class="btn  btn-lg ml-4" id="step3">3. Objava</button>

                                </div>

                                <div>
                                     <button id="btn_next" class="btn float-right" style="display:block;">Dalje</button>
                                     <button id="btn_previous" class="btn float-left" style="display:none;">Nazad</button>
                                </div>
                                

                                <form action="" class="pt-5 ">
                                <hr>
                                    <div id="basic-info" class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex input-group">
                                            <div class="form-group" style="width: 100%;">
                                                <div class="form-group " style="width: 100%">
                                                <b class="float-left h3"> KATEGORIJA </b>
                                                    <select class="custom-select my-select">
                                                    <option value="stan">Stan</option>
                                                    <option value="kuca">Kuca</option>
                                                    <option value="soba">Soba</option>
                                                    </select>
            
                                                </div>
                                            </div>
                                        </div>

                                        <hr />
                                        <b class="float-left h3"> LOKACIJA </b>


                                        <div class="d-flex input-group">
                                            <div class="form-group" style="width: 100%;">
                                                <input type="text" class="form-control" placeholder="Ulica"
                                                    name="street">
                                            </div>
                                        </div>
                                        <div class="d-flex input-group">
                                            <div class="form-group" style="width: 100%;">
                                                <input type="datetime" class="form-control"
                                                    placeholder="Broj" name="number">
                                            </div>
                                        </div>
                                        <hr/>

                                        <div class="d-flex">
                                            <div class="form-group " style="width: 100%">
                                        <b class="float-left h4"> BROJ KVADRATA </b>
                                        <input type="text" class="form-control"
                                                    placeholder="Broj kvadrata" name="number">
        
                                            </div>
                                        </div>



                                        <hr/>

                                        <div class="d-flex">
                                            <div class="form-group " style="width: 100%">
                                        <b class="float-left h4"> BROJ SOBA </b>
                                                <select class="custom-select my-select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
        
                                            </div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="form-group " style="width: 100%">
                                        <b class="float-left h4"> BROJ KUPATILA </b>
                                                <select class="custom-select my-select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                </select>
        
                                            </div>
                                        </div>

                                        <hr/>

                                        <div class="d-flex">
                                                <div class="form-group " style="width: 100%">
                                            <b class="float-left h4"> GREJANJE </b>
                                                    <select class="custom-select my-select">
                                                    <option value="centralno">Centralno grejanje</option>
                                                    <option value="samostalno">Samostalno (TA pec, klima)</option>
                                                    <option value="drva">Grejanje na drva</option>
                                                    </select>
            
                                                </div>
                                        </div>

                                        <hr/>

                                        <div class="d-flex">
                                            <div class="form-group ">
                                            <b class="float-left"> TV </b>
                                            <input id="cb-tv" type="checkbox" class="ml-2" style="float: left; margin-top: 5px;>">
                                            </div>
                                            <div class="form-group ml-3">
                                              <b class="float-left"> INTERNET </b>
                                              <input id="cb-internet" type="checkbox" class="ml-2" style="float: left; margin-top: 5px;>">
                                            </div>
                                            <div class="form-group ml-3">
                                              <b class="float-left"> KLIMA UREDJAJ </b>
                                              <input id="cb-klima" type="checkbox" class="ml-2" style="float: left; margin-top: 5px;>">
                                            </div>
                                            <div class="form-group ml-3">
                                              <b class="float-left"> PARKING </b>
                                              <input id="cb-parking" type="checkbox" class="ml-2" style="float: left; margin-top: 5px;>">
                                            </div>
                                        </div>
                                        
                                        </div>

                                    
                                        
                                        <!--!!!!!!!!!!!!!!!!!! KRAJ col-sm-6 prvog -->


                                        <div class="col-md-6 h-50">
                                            <!-- NASLOV OGLASA -->
                                            <div class="d-flex">
                                                <div class="form-group " style="width: 100%">
                                                    <b class="float-left h4"> NASLOV OGLASA </b>
                                                    <input type="text" class="form-control"
                                                                placeholder="" name="number">
                                                </div>
                                            </div>
                                           
                                            <div class="d-flex">
                                                <div class="form-group " style="width: 100%">
                                                    <b class="float-left h4"> OPIS </b>
                                                    <textarea type="text" class="form-control"
                                                                placeholder="" id="description"> </textarea>
                                                </div>
                                            </div>

                                            <hr/>


                                            <div class="d-flex">
                                                <div class="form-group " style="width: 100%">
                                                    <div class="row">
                                                        <b class=" h4 ml-3"> CENA </b>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="price">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <select class="custom-select my-select">
                                                                <option value="-1">VALUTA</option>
                                                                <option value="euro">EUR</option>
                                                                <option value="dollar">DOL</option>
                                                                <option value="dinar">RSD</option>
                                                            </select>
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

                                        <input type="file" name="files[]" multiple > 

                                    </div>


                                    <!-- kraj dela za fotografije -->
                                   

                                    <!-- pocetak dela za kraj -->

                                    <div id="final-part" class="mt-4" style="display:none;">

                                          <h1>FINAL</h1>

                                    </div>

                                    <!-- kraj dela za kraj -->

                                    <!-- BTN KRAJ-->
                                    <input type="submit" id="submit" class="btn  float-right" 
                                    value="Kraj" style="display: none;">
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