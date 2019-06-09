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
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Izdavacki Oglasi</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Studentski Oglasi</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<form class="" method="POST" action="deleteUser">
                @csrf
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
														<!-- <th>Ukloni Nalog</th> -->
                        </tr>
												@foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->last_name}}</td>
														<td>{{$user->email}}</td>
														<td>{{$user->admin}}</td>
														<td>{{$user->student}}</td>
														<td>{{$user->phoneNumber}}</td>
														<td>{{$user->numberOfAds}}</td>
														<!-- <td> <button name="id" value="{{$user->id}}" className="btn btn-danger">Obrisi </button> </td>
                        --></tr>
                        @endforeach
                    </table>
									</form >
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<form class="" method="POST" action="deletePubAd">
                @csrf
					<table class="users w-100 text-center text-dark">
              <tr>
								<th>Id</th>
								<th>Id-Korisnika</th>
								<th>Naslov</th>
								<th>Cena</th>
								<th>Opstina</th>
								<th>Ulica i Broj</th>
								<th>Ukloni Oglas</th>
            </tr>
						@foreach($publisherAds as $pubAd)
            <tr>
                <td>{{$pubAd->id}}</td>
								<td>{{$pubAd->userId}}</td>
                <td>{{$pubAd->headline}}</td>
                <td>{{$pubAd->price}}</td>
								<td>{{$pubAd->community}}</td>
								<td>{{$pubAd->street}} {{$pubAd->number}}</td>
								<td> <button name="id" value="{{$pubAd->id}}" className="btn btn-danger">Obrisi </button> </td>
            </tr>
            @endforeach
        </table>
			</form>
		</div>
					<div class="tab-pane fade text-dark" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

				<form class="" method="POST" action="deleteStudAd">
						@csrf
					<table class="users w-100 text-center text-dark">
                        <tr>
														<th>Id</th>
														<th>Id-Korisnika</th>
														<th>Naslov</th>
							              <th>Kreiran</th>
                            <th>Istice</th>
                            <th>Ukloni Oglas</th>
                        </tr>
												@foreach($studentAds as $sAds)
												<tr>
														<td>{{$sAds->id}}</td>
														<td>{{$sAds->userId}}</td>
														<td>{{$sAds->headline}}</td>
														<td>{{$sAds->dateCreated}}</td>
														<td>{{$sAds->dateExpired}}</td>
														<td> <button name="id" value="{{$sAds->id}}" className="btn btn-danger">Obrisi </button> </td>

												</tr>
												@endforeach
                    </table>
									</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

@endsection
