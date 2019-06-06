@extends('layouts.masterProfile')
@section ('content')

<!-- body --->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/profil.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/profilPanelTab.css')}}">

<section id="profile-section" class="text-dark">

  <div class="dark-overlay">
    <div class="home-inner container">
      <div class="row bg-light" >
        <div class="col-sm-4">

          <div class="d-flex justify-content-center">
            <div class="col-sm-9 circle ">
              <img class="profile-pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg">
            </div>
          </div>

          <div class="d-flex justify-content-center row">

            <div class="col-3">
              <i class="fa fa-camera fa-3x upload-button"></i>
              <input class="file-upload" type="file" accept="image/*"/>
            </div>
            <div class="col-9">
              <h4>Promenite svoju profilnu sliku</h4>
            </div>
          </div>
          <div class="col my-4"  style="border-top: 3px solid; border-color: rgba(236, 99, 19);">
            <p>Ime: {{($user->name)}}</p>
            <p>Prezime: {{($user->last_name)}}</p>
            <p>Tip korisnika:
              @if($user->student==false)
                Student
              @else
                Izdavac
              @endif
            </p>
            <p>E-mail adresa: {{($user->email)}}</p>
            <p>Broj telefona: {{$user->phoneNumber}} </p>
            <p>Fakultet: {{$student->faculty}}</p>
            <p>Godina studiranja: {{$student->yearOfStudy}}</p>
            <p>Broj postavljenih oglasa: {{($user->numberOfAds)}}</p>
          </div>

        </div>


        <div class="col-sm-8" style="border-right: 1px solid black;">

          <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Uredi profil</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Postavljeni oglasi</a>
              <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Poruke</a> -->
            </div>
          </nav>
          <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <!-- UREDI PROFIL -->
              <form class="form-horizontal"  method="POST" action="/updateProfil">
                @csrf
                <div class=" row">

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Ime:</label>
                      <div class="col-lg-8">
                        <input class="form-control" name="name" type="text" value={{$user->name}}>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Prezime:</label>
                      <div class="col-lg-8">
                        <input class="form-control" name="last_name" type="text" value={{$user->last_name}}>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-lg-3 control-label">E-mail adresa:</label>
                      <div class="col-lg-8">
                        <input class="form-control" name="email" type="text" value={{$user->email}} disabled>
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="col-lg-3 control-label">Broj Telefona:</label>
                      <div class="col-lg-8">
                        <input class="form-control" name="phoneNumber" type="text" value={{$user->phoneNumber}}>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Fakultet:</label>
                      <div class="col-lg-8">
                        <input class="form-control" type="text" name="faculty" value={{$student->faculty}}>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Godina studiranja:</label>
                      <div class="col-lg-8">
                        <input class="form-control" type="number" name="yearOfStudy" value={{$student->yearOfStudy}}>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-md-3 control-label"></label>
                      <div class="col-md-8">
                        <button type="submit" class="btn btn-outline-success" value="Save Changes" >Sačuvaj</button>
                        <span></span>

                      </div>
                    </div>

                  </div>

                </div>
              </form>



            </div>


         <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <p class="display-4">Objavljeni oglasi</p>
           
            <form class="" method="POST" action="delete">
                @csrf
                <ul class="list-group">
                @foreach($ads as $ad)
                    <div class="card col-sm-4" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">{{$ad->headline}}</h5>
                       <p class="card-text">{{$ad->description}}</p>
                        <button name="id" value="{{$ad->id}}" class="btn btn-danger">Obrisi</button>
                      </div>
                    </div>
                  @endforeach
                 
                </div>
           
            </form >
          </div>

        </div>
      </div>





      <!-- OK -->

    </div>



  </div>



</div>
</div>
</div>


</section>








<script src="{{asset('assets/js/uploadPicture.js')}}"></script>
<script src="{{asset('assets/js/login.js')}}"></script>

<!-- /body --->

@endsection('content')
