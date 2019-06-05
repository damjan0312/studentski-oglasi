@extends('layouts.masterProfileAdmin')

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/adminPanel.css')}}">

<!-- Tabs -->
<section id="tabs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 w-100">
				<nav>
					<div class="nav nav-tabs nav-fill text-dark" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Korisnicki nalozi</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Studentski Oglasi</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Izdavacki Oglasi</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="users w-100 text-center text-dark">
                        <tr>
							<th>Rb</th>
                            <th>Ime</th>
                            <th>Prezime</th> 
                            <th>E-mail</th>
                            <th>Admin</th>
                            <th>Student/Izdavac</th>
                            <th>Broj Telefona</th>
							<th>Broj Oglasa</th>
							<th>Ukloni Nalog</th>
                        </tr>
                        <tr>
                            <td>Jill</td>
                            <td>Smith</td> 
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td> 
                            <td>94</td>
                        </tr>
                    </table>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<table class="users w-100 text-center text-dark">
                        <tr>
							<th>Rb</th>
							<th>Naslov</th>
							<th>Cena</th>
							<th>Opstina</th>
							<th>Ulica i Broj</th>
							<th>Broj Kvadrata</th>
							<th>Broj Soba</th>
							<th>Broj Kupatila</th>
							<th>Nacin Grejanja</th>
					<!--		<th>TV</th>
							<th>Internet</th>
							<th>Klima Uredjaj</th>
							<th>Parking</th>
                            <th>Kreiran</th> 
                            <th>Istice</th> -->
                            <th>Ukloni Oglas</th>
                        </tr>
                        <tr>
                            <td>Jill</td>
                            <td>Smith</td> 
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td> 
                            <td>94</td>
                        </tr>
                    </table>
					</div>
					<div class="tab-pane fade text-dark" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					<table class="users w-100 text-center text-dark">
                        <tr>
							<th>Rb</th>
							<th>Naslov</th>
							<th>Kategorija</th>
                            <th>Kreiran</th> 
                            <th>Istice</th>
                            <th>Ukloni Oglas</th>
                        </tr>
                        <tr>
                            <td>Jill</td>
                            <td>Smith</td> 
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td> 
                            <td>94</td>
                        </tr>
                    </table>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</section>

@endsection