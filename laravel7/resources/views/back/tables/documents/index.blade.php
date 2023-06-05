@extends('back.layouts.app')

@section('title', 'Les documents')

@section('style')
@endsection

@section('breadcrumb')
@component('back.layouts.components.breadcrumb')

@slot('page')
Les documents
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
@include('back.forms.documents.create')

<div class="row">
	<div class="col-12">
		<div class="card">
			
			@superadmin
			<div class="card-header">
				
				<div class="row">
					<button class="btn btn-primary modal-btn" type="submit">
						Ajouter
					</button>
					
					<a  href="{{route('linkstorage')}}" class="ml-1 btn btn-primary modal-btn" type="submit">
						Activer le file Systéme
					</a>
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
									<th>auteur</th>
									<th>titre</th>
									<th>date d'ajout</th>
									<th>status</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								
								@foreach ($documents as $item)  
								<tr>
									<td scope="row">{{$item->id }}</td>
									<td>{{$item->nom_auteur .' '. $item->prenom_auteur }}</td>
									<td>{{$item->titre}}</td>
									<td>{{date('d-m-Y h:i', strtotime($item->created_at))}}</td>						
									<td>
										<div class="badge rounded-pill {{ $item->status=="valide" ? 'bg-primary' : 'bg-warning' }}   ">
											{{$item->status}}
										</div>
									</td>
									<td>
										<div class="d-flex">
											
											<a class="px-1" href="{{ route('back.documents.show', $item->id) }}" >
												<i title="consulter" class="icon-md success ft-eye"></i>
											</a>
											
											@if ($item->status=="enattente")
											
											<a class="px-1" href="#" onclick="confirmalert({{$item->id}},'valide')">
												<i title="valider" class="icon-md success ft-check"></i> <span>
													Valider
												</span> 
											</a>
											<a class="px-1" href="#" onclick="confirmalert({{$item->id}},'rejete')">
												<i title="rejeter" class="icon-md danger ft-slash"></i><span>
													Rejeter
												</span> 
											</a>
											<form class="destroy-form-valide-{{$item->id}}" action="{{ route('back.documents.destroy', $item->id) }}" 	method="POST"
												class="d-none">
												@csrf
												@method('DELETE')
												<input type="hidden" name="status" value="valide">
											</form>
											
											<form class="destroy-form-rejete-{{$item->id}}" action="{{ route('back.documents.destroy', $item->id) }}" 	method="POST"
												class="d-none">
												@csrf
												@method('DELETE')
												<input type="hidden" name="status" value="rejete">
											</form>.
											
											@else
											<a class="px-1" href="#" onclick="confirmalert({{$item->id}},'suspendu')">
												<i title="suspendre" class="icon-md danger ft-slash"></i>
											</a>
											<form class="destroy-form-suspendu-{{$item->id}}" action="{{ route('back.documents.destroy', $item->id) }}" 	method="POST"
												class="d-none">
												@csrf
												@method('DELETE')
												<input type="hidden" name="status" value="suspendu">
											</form>.
											@endif
											
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
		{{ $documents->links('front.layouts.components.pagination') }}
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