@extends('home')
	@section('content')   
	@include('genero.modal')
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  		<strong> Genero Actualizado Correctamente.</strong>
	</div>
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Operaciones</th>
			</thead>
			
			<tbody id="datos">
				


	
			
	@section('scripts')
	
		<script src="{{asset('js/script2.js')}}"></script>

	@stop	



			</tbody>
		</table>

	@endsection
	
@stop