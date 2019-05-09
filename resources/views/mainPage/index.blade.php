@extends($login)

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/index.css')}}">


<div class="home-container">
    
        <section id="search-section">
            <div class="dark-overlay row justify-content-center align-items-center">
                    <div class="search-container text-dark row p-3 row justify-content-center align-items-center">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <b>KATEGORIJA</b>
                                <select class="custom-select my-select">
                                    <option value="stan">Stan</option>
                                    <option value="kuca">Kuca</option>
                                    <option value="soba">Soba</option>
                                 </select>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                               <b>OPSTINA</b>
                                <select class="custom-select my-select">
                                    <option value="stan">Medijana</option>
                                    <option value="kuca">Pantelej</option>
                                    <option value="soba">Crveni Krst</option>
                                 </select>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                            <b>CENA OD:</b>
                                <input class="form-control" type="text" placeholder="EUR">
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                            <b>CENA DO:</b>
                                <input class="form-control" type="text" placeholder="EUR">
                            </div>
                        </div>

                        <div class="row">
                            <button class="btn btn-lg btn-warning">SEARCH</button>
                        </div>
                    </div>
            </div>

            

           
        </section>
    
    
   
</div>






@endsection
