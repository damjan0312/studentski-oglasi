@extends('layouts.masterProfile')
@section ('content')

<!-- body --->


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
            <p>Ime:</p>
            <p>Prezime</p>
            <p>Tip korisnika:</p>
            <p>E-mail adresa:</p>
            <p>Broj telefona: </p>
            <p>Fakultet!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!:</p>
            <p>Godina studiranja:</p>
            <p>Broj postavljenih oglasa:</p>


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
              <form class="form-horizontal" role="form">
                <div class=" row">

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Ime:</label>
                      <div class="col-lg-8">
                        <input class="form-control" type="text" value="John">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Prezime:</label>
                      <div class="col-lg-8">
                        <input class="form-control" type="text" value="Cena">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Tip korisnika:</label>
                      <div class="col-lg-8">
                        <input class="" type="radio" value="Student" name="tip">Student
                        <input class="" type="radio" value="Izdavac" name="tip">Izdavac
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-lg-3 control-label">E-mail adresa:</label>
                      <div class="col-lg-8">
                        <input class="form-control" type="text" value="johnCena@gmail.com">
                      </div>
                    </div>

                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Broj telefona:</label>
                      <div class="col-lg-8">
                        <input class="form-control" type="text" value="25641588">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Fakultet:</label>
                      <div class="col-lg-8">
                        <input class="form-control" type="text" value="Elektronski fakultet">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Godina studiranja:</label>
                      <div class="col-lg-8">
                        <input class="form-control" type="number" value="3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Lozinka:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="password" value="11111122333">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Potvrdite lozinku:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="password" value="11111122333">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"></label>
                      <div class="col-md-8">
                        <input type="button" class="btn btn-outline-success" value="Save Changes" >
                        <span></span>
                        <input type="reset" class="btn btn-outline-danger" value="Cancel" style="margin-top:2px;">
                      </div>
                    </div>

                  </div>

                </div>
              </form>
              <!-- UREDI PROFIL -->

            </div>


     <!--       <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              <form action="mailto:someone@example.com" method="post" enctype="text/plain">
                Name:<br>
                <input  class="form-control" type="text" name="name"><br>
                E-mail:<br>
                <input  class="form-control" type="text" name="mail"><br>
                Comment:<br>
                <input  class="form-control" type="text" name="comment" size="50"><br><br>
                <input type="submit" value="Send" class="btn btn-success">
                <input type="reset" value="Reset" class="btn btn-danger">
              </form>
            </div>
          </div> -->

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
