@extends('layouts.master')

@section('content')
<section id="home-section">
    <div class="dark-overlay">
        <div class="home-inner container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card text-center card-form">
                <div class="card-header">{{ __('Verifikujte vašu email adresu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link je upravo poslat na vaš email.') }}
                        </div>
                    @endif

                    {{ __('Pre ponovnog slanja, molimo proverite vaše prijemno sanduče.') }}
                    {{ __('Ako niste primili email') }}, <a href="{{ route('verification.resend') }}">{{ __('Kliknite ovde za novi verifikacioni email') }}</a>.
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
