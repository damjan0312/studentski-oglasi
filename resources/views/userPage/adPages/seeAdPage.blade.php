@extends($login)

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/seeAdPage.css')}}">

<div class="home-container">

<section id="bg-section">

    <section id="ad-section" class="text-dark">
        <div id="section-div">

            <div class="row">


                <div class="col-md-6">


                                    <h1>Incredibly Basic Slider</h1>
                    <div id="slider">
                    <a href="#" class="control_next">></a>
                    <a href="#" class="control_prev"><</a>
                    <ul>
                        <li>SLIDE 1</li>
                        <li style="background: #aaa;">SLIDE 2</li>
                        <li>SLIDE 3</li>
                        <li style="background: #aaa;">SLIDE 4</li>
                    </ul>
                    </div>


                </div>

                <div class="col-md-6">

                <div class="d-flex">
                    <b class="h4 mt-4">KATEGORIJA:</b>
                </div>
                <hr>

                <div class="d-flex">
                    <b class="h4 mt-2">LOKACIJA:</b>
                </div>


                <div class="d-flex">
                    <b class="h5 mt-2 ml-3">Ulica:</b>

                </div>
                <div class="d-flex">
                     <b class="h5 mt-2 ml-3">Broj:</b>
                </div>

                <hr>

                <div class="d-flex">
                    <b class="h4 mt-4">BROJ KVADRATA:</b>
                </div>
                <hr>






                </div>


            </div>






        </div>
    </section>
</section>



</div>
<script src="{{asset('assets/js/login.js')}}"></script>
<script src="{{asset('assets/js/imageSlider.js')}}"></script>
@endsection
