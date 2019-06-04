@extends($login)

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/publisherReview.css')}}">

<div class="row">
    <div class="col-sm 12">
    <section id="publisher-review-section">
   <div id="padding-div" class="row">
   </div>
   <div id="row" class="row">
        <div class="col-sm-2"></div>

        <div id="profileFrame" class="col-sm-8"> <!-- PROFILE FRAME -->
            <div id="images" class="row">

                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <img class="img-fluid" src="http://sparccom.com/wp-content/themes/sparcccom/images/profileimg.jpg">
                    <hr/>
                    <div class="d-flex  pt-2 justify-content-center">
                     <h2 ><b> {{$user->name}}  {{$user->last_name}} </b></h2>
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
                     <h4 class="ml-4">{{$user->name}} </h4>
                    </div>


                    <div class="d-flex  pt-2 ">
                     <h4><b> Prezime: </b></h4>
                     <h4 class="ml-4">{{$user->last_name}} </h4>
                    </div>


                    <div class="d-flex  pt-2 ">
                     <h4><b> Tip Korisnika:</b> </h4>
                     <h4 class="ml-4">
                       Izdavac
                      </h4>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="d-flex  pt-2">
                     <h1><span class="badge badge-success">Dodatne Informacije</span></h1>
                    </div>
                    <hr>

                    <div class="d-flex  pt-2 ">
                     <h4><b> E-mail:</b> </h4>
                     <h4 class="ml-4">{{$user->email}}</h4>
                    </div>

                    <div class="d-flex  pt-2 ">
                     <h4><b> Broj Telefona:</b> </h4>
                     <h4 class="ml-4">{{$user->phoneNumber}} </h4>
                    </div>

                    <div class="d-flex  pt-2 ">
                     <h4><b> Broj Oglasa:</b> </h4>
                     <h4 class="ml-4">{{$user->numberOfAds}} </h4>
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
