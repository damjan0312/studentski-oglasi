@extends('layouts.master')



@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}">
<section id="home-section">
    <div class="dark-overlay">
        <div class="home-inner container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card text-center card-form">
                      <div class="card-header">{{ __('Resetovanje Lozinke') }}</div>

                  <div class="card-body">
                      <form method="POST" action="{{ route('password.update') }}">
                          @csrf

                          <input type="hidden" name="token" value="{{ $token }}">

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Adresa') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nova Lozinka') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Potvrdite lozinku') }}</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-success">
                                      {{ __('Potvrdite') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
</section>
@endsection
