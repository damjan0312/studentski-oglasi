@extends($login)

@section('content')

<!-- K O M E N T A R -->

<!-- Sve labele su nazvane lbl_... primer(lbl_headline - naslov oglasa) -->

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/seeAdPage.css')}}">

<div class="home-container">

    <section id="ad-section" class="text-dark">
        
        <div id="section-div">

        <div class="ad-headline row">
            <div class="col-sm-6">
             <p id="lbl_headLine" class="h1 pl-3 pt-3 ml-5 "> NASLOV OGLASA</p>
            </div>
            
            <div class="col-sm-6 p-3">
                     <div class="price-div form-inline icons mr-5">
                          <i class="fas fa-tags fa-2x ml-auto "></i>
                          <div class="price-info form-inline ml-4 mr-1" style="font-size: 2.5em">
                            <label id="lbl_price" for=""> <b>Cena: </b></label>
                            <label id="lbl_priceNum" for="" class="ml-2"> <b> 199 </b></label>
                          </div>
                          
                          <i class="fas fa-euro-sign fa-2x"></i>
                     </div>
            </div>
        </div>

            <div class="row" id="first-row">


                <div id="image-col" class="col-lg-6"> <!-- section for images LEFT -->


                    <div id="slider">
                        <a href="#" class="control_next">></a>
                        <a href="#" class="control_prev"><</a>
                        <ul>
                            <li>SLIKA 1</li>
                            <li style="background: #aaa;">SLIKA 2</li>
                            <li>SLIKA 3</li>
                            <li style="background: #aaa;">SLIKA 4</li>
                        </ul>  
                    
                    </div>
                    <p id="ad-updated-text" class="text-dark"><small>Azuriran: 5/11/2019, Objavljen: 5/11/2018</small></p>
                    <p id="ad-updated-text" sclass="text-dark"><small>Postavio korisnik: <a  id="user" href="">@izdavac1</a></small></p>
                    <div class="col-sm text-justify" id="description-text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                </div>


                <div id="info-col" class="col-lg-6"> <!-- section for informations RIGHT -->

                <div class="d-flex row">
                    <div class="form-inline col-sm-5" style="font-size: 1.5em;">
                            <label id="lbl_category" for=""> <b>KATEGORIJA: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> Stan </label>
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
        <!-- test example -->  <label class="ml-4 text-left" for=""> Somborska </label>
                        </div>
                        <div class="form-inline col-sm-6" style="font-size: 1.1em;">
                                <label id="lbl_number" for=""> <b>BROJ: </b></label>
        <!-- test example -->  <label class="ml-4" for=""> 83A/78 </label>
                        </div>
                    </div>
                   
                </div>
                <hr>
                
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_rooms" for=""> <b>BROJ SOBA: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> 3 </label>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_bathrooms" for=""> <b>BROJ KUPATILA: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> 2 </label>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_heating" for=""> <b>GREJANJE: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> Centralno grejanje </label>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_tv" for=""> <b>TV: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> Da </label>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_internet" for=""> <b>Internet: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> Da </label>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_airCondition" for=""> <b>KLIMA UREDJAJ: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> Da </label>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="form-inline" style="font-size: 1.5em;">
                            <label id="lbl_parking" for=""> <b>PARKING: </b></label>
    <!-- test example -->  <label class="ml-4" for=""> Ne </label>
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