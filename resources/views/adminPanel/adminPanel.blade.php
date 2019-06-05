@extends('layouts.masterProfileAdmin')

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/adminPanel.css')}}">

<!-- Tabs -->
<section id="tabs">
	<div class="container">
		<h6 class="section-title h1">Tabs</h6>
		<div class="row">
			<div class="col-xs-12 ">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Korisnicki nalozi</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Studentski Oglasi</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Izdavacki Oglasi</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table style="width:100%">
                        <tr>
                            <th>Ime</th>
                            <th>Prezime</th> 
                            <th>E-mail</th>
                            <th>Admin</th>
                            <th>Student/Izdavac</th>
                            <th>Broj Telefona</th>
                            <th>Broj Oglasa</th>
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
						
					</div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						
					</div>
				</div>
			
			</div>
		</div>
	</div>
</section>

@endsection