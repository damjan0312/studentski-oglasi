@extends('layouts.master')
@section ('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}">

<section id="home-section">
        <div class="dark-overlay">
            <div class="home-inner container">
                <div class="row">
                    <div class="col-lg-8 ">
                        <h1 class="display-4">
                            Pretražuj i objavljuj
                            oglase na najboljem studentskom portalu u Nišu
                        </h1>
                        <div class="d-flex">
                            <div class="p-3 align-selft-start">
                                <i class="iFrame fas fa-check fa-2x"> </i>
                            </div>
                            <div class="p-3 align-self-end">
                                <h5> Pretrazuj stanove i kuce u Nisu. Pronadji svoj novi dom!</h5>
                            </div>

                        </div>
                        <div class="d-flex">
                            <div class="p-3 align-selft-start">
                                <i class="iFrame fas fa-check fa-2x"> </i>
                            </div>
                            <div class="p-3 align-self-end">
                                <h5> Postavljaj i pretrazuj studentske oglase!</h5>
                            </div>

                        </div>
                        <div class="d-flex">
                            <div class="p-3 align-selft-start">
                                <i class="iFrame fas fa-check fa-2x"> </i>
                            </div>
                            <div class="p-3 align-self-end">
                                <h5>Komuniciraj sa ostalim studentima!</h5>
                            </div>

                        </div>
                    </div>

                    <!-- FORMA ZA PRIJAVU -->

                    <div class="col-lg-4 p-4">
                        <div class="card text-center card-form">
                            <div class="card-body">
                                <h3>Prijavi se</h3>
                                <p>Dobrodosli nazad!</p>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                      <div class="col-md-12">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Lozinka" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="float-left ml-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Zapamti') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" value="Prijavi se" class="btn btn-outline-light btn-block">

                                </form>
                                @if (Route::has('password.request'))
                                   <a class="btn btn-link" style="color:white;" href="{{ route('password.request') }}">
                                       {{ __('Zaboravili ste lozinku?') }}
                                   </a>
                               @endif
                                <p class="p-4" style="opacity:0.7;">Nemate nalog? <a href="{{route('registration')}}"
                                        style="color: white; font-size:15px;">Registrujte se!</a></p>

                            </div>
                        </div>
                    </div>








                </div>
            </div>
        </div>
    </section>


@endsection
