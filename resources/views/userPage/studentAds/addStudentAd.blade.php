@extends($login)

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/addStudentAd.css')}}">

<div class="home-container">

    <section id="add-section" class="text-white">

        <form action="{{ route('StudentAd') }}"  method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row text-dark" id="row-div">
                <div id="col-sm-8" class="col-sm-6">
                    <div class="headline text-center">
                        <p id="headline-text" class="h1">DODAJ OGLAS</p>
                    </div>

                    <div class="d-flex">
                        <div class="form-group " style="width: 100%">
                            <b class="float-left h4"> Tip Oglasa </b>
                            <select name="typeOfHeating" class="custom-select my-select" name="category">
                                <option value="">Izaberite tip oglasa</option>
                                <option value="Prodaja Knjiga">Prodaja Knjiga</option>
                                <option value="Trazim Cimera">Trazim Cimera</option>
                                <option value="Privatni Casovi">Privatni Casovi</option>
                                <option value="Ostalo">Ostalo</option>
                            </select>

                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="form-group " style="width: 100%">
                            <b class="float-left h4"> Naslov Oglasa </b>
                            <input id="headline" type="text"
                                class="form-control form-control{{ $errors->has('headline') ? ' is-invalid' : '' }}"
                                placeholder="" name="headline">

                            @if ($errors->has('headline'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('headline') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="d-flex ">
                        <div class="form-group " style="width: 100%">
                            <b class="float-left h4"> Opis Oglasa </b>
                            <textarea id="description-textarea" type="text"
                                class="form-control form-control{{ $errors->has('description-textarea') ? ' is-invalid' : '' }}"
                                placeholder="Opisite Svoj Oglas Ovde..." name="description"></textarea>

                            @if ($errors->has('headline'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description-textarea') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" id="add-studentAd" class="btn btn-success btn-lg justify-content-end"> Postavi Oglas
                        </button>



                    </div>

                </div> <!-- kraj col-sm-8 div -->
        </form>
        <div id="add-div" class="col-sm-4">

        </div>

</div>


</section>


</div>

<script src="{{asset('assets/js/ad.js')}}"></script>
@endsection
