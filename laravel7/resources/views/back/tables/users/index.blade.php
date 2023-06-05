@extends('back.layouts.app')

@section('title', 'Les utilisateurs')

@section('style')
@endsection

@section('breadcrumb')
@component('back.layouts.components.breadcrumb')

@slot('page')
Les utilisateurs
@endslot
@slot('menu')
Registre
@endslot
@slot('action')
Liste
@endslot


@endcomponent
@endsection

@section('content')
@include('back.forms.users.create')

<div class="row">
	<div class="col-12">
		<div class="card">
			
			@superadmin
			<div class="card-header">

				<div class="row">
					<button class="btn btn-primary modal-btn" type="submit">
						Ajouter
					</button>
				</div>
				
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">
				<div class="card-body">
					
					
					<div class="table-responsive" >
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Email</th>
									<th>Nom</th>
									<th>Prenom</th>
									<th>status</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								
								@foreach ($users as $item)  
								<tr>
									<th scope="row">{{$item->id}}</th>
									<td>{{$item->email}}</td>
									<td>{{$item->nom}}</td>
									<td>{{$item->prenom}}</td>
									<td >
										<div class="badge rounded-pill {{ $item->status=="actif" ? 'bg-primary' : 'bg-warning' }}   ">
											{{$item->status}}
										</div>
									</td>
									<td>
										<div class="">
											<a href="{{ route('back.users.show', $item->id) }}">
												<i title="Modifier" class="info ft-edit"></i>
											</a>
											<a class="px-3" href="#" onclick="confirmalert({{$item->id}})">
												<i title="{{ $item->status=="actif" ? 'Bannir' : 'Débannir' }}" class="danger {{ $item->status=="actif" ? 'ft-lock' : 'ft-unlock' }}  "></i>
											</a>
											<form class="destroy-form-{{$item->id}}" action="{{ route('back.users.destroy', $item->id) }}" 	method="POST"
												class="d-none">
												@csrf
												@method('DELETE')
												<input type="hidden" name="status" value="{{ $item->status=="actif" ? 'inactif' : 'actif' }}">
											</form>
										</div>
									</td>
								</tr>
								@endforeach
								
							</tbody>
						</table>
					</div>
					
					
				</div>
			</div>
			@else
			<p class="p-2">Vous n'aviez pas l'autorisation pour accéder à cette page.</p>
			@endsuperadmin


		</div>
		{{ $users->links('front.layouts.components.pagination') }}
	</div>
</div>


@endsection

@section('script')
<script type="text/javascript">
	@if ($errors->any())
    $(window).on('load', function() {
		$(".modal").css("transform", "scale(1)");
    	$(".modal").css("transition", "0.2s");
    });
	@endif
</script>
@endsection