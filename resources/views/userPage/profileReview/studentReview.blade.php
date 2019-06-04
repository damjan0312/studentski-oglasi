@extends('layouts.masterProfile')
@section ('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/publisherReview.css')}}">

<div class="row">
    <div class="col-sm-12">
    <section id="publisher-review-section">
   <div id="row" class="row">
        <div class="col-sm-2"></div>
   
        <div id="profileFrame" class="col-sm-8"> <!-- PROFILE FRAME -->
            <div id="images" class="row">
                
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <img class="img-fluid" src="http://sparccom.com/wp-content/themes/sparcccom/images/profileimg.jpg">
                    <hr/>
                    <div class="d-flex  pt-2 justify-content-center">
                     <h2 ><b> Sasa Markovic </b></h2>
                    </div>

                </div>
                <div class="col-md-4"></div>

            </div>

            <div id="infos" class="row text-light pt-3">
                <div class="col-md-6" >
                    <div class="d-flex  pt-2 ">
                     <h1 class="text-center"><span class="badge badge-success">Opste Informacije</span></h1>
                    </div>
                    <hr/>

                    <div class="d-flex  pt-2 ">
                     <h4 className="form-control"><b> Ime: </b></h4>
                     <h4 class="ml-4">Sasa </h4>
                    </div>

                    
                    <div class="d-flex  pt-2 ">
                     <h4><b> Prezime: </b></h4>
                     <h4 class="ml-4">Markovic </h4>
                    </div>

                    
                    <div class="d-flex  pt-2 ">
                     <h4><b> Tip Korisnika:</b> </h4>
                     <h4 class="ml-4">Izdavac </h4>
                    </div>

                    <div class="d-flex  pt-2 ">
                     <h4><b> Broj Oglasa:</b> </h4>
                     <h4 class="ml-4">4 </h4>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="d-flex  pt-2">
                     <h1><span class="badge badge-success">Dodatne Informacije</span></h1>
                    </div>
                    <hr>

                    <div class="d-flex  pt-2 ">
                     <h4><b> E-mail:</b> </h4>
                     <h4 class="ml-4">sasamarkovic@gmail.com </h4>
                    </div>

                    <div class="d-flex  pt-2 ">
                     <h4><b> Broj Telefona:</b> </h4>
                     <h4 class="ml-4">060125244 </h4>
                    </div>

                    <div class="d-flex  pt-2 ">
                     <h4><b> Fakultet:</b> </h4>
                     <h4 class="ml-4">Elektronski Fakultet Nis </h4>
                    </div>

                    <div class="d-flex  pt-2 ">
                     <h4><b> Godina studija:</b> </h4>
                     <h4 class="ml-4">3 </h4>
                    </div>

                </div>

            </div>



        
        </div> <!-- PROFILE FRAME -->

        <div class="col-sm-2"></div>
   </div>

</section>

    </div>
</div>




<script src="{{asset('assets/js/login.js')}}"></script>
@endsection