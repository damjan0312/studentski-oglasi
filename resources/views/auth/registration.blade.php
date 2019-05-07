@extends('layouts.master')
@section ('content')

    <section id="home-section">
        <div class="dark-overlay">
            <div class="home-inner container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card text-center card-form">
                            <div class="card-body">
                                <h3>Registruj se</h3>
                                <p>Registracija je besplatna i uvek ce biti!</p>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Ime" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">


                                        <div class="col-md-6">
                                            <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="Prezime" required autofocus>

                                            @if ($errors->has('last_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">


                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">


                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Lozinka" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">


                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Potvrdite lozinku" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                           <input type="radio" name="student-izdavac" value="0"> Student
                                           <input type="radio" name="student-izdavac" value="1"> Izdavac
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <input type="submit" class="btn btn-outline-light float-right" value="Registruj se" >

                                          </input>
                                        </div>
                                    </div>
                                </form>


                                <!--BTN DALJE-->


                            </div>






                        </div>
                    </div>

                </div>




            </div>
        </div>
        </div>



    </section>

</div>

<script src="{{asset('assets/js/login.js')}}"></script>


@endsection
