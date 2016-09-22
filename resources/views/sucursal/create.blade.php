@extends('index')

@section('content')

		<div class="container-fluid">
			<div class="row">
			<div class="col-md-15 col-md-offset-15">
			<div class="box box-success">


				
				<div class="box-header with-border">
			  		<h3 class="box-title">NUEVA SUCURSAL</h3>
					
					<div class="box-tools pull-right">	
						
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

					</div>


				</div>
			
				<div class="box-body">


					{!! Form::open(array('id' =>'formsucursal', 'class'=>'form-horizontal')) !!}


					<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    				<strong>SUCURSAL AGREGADA CORRECTAMENTE</strong>
					</div>


					
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

		


					<div class="form-group">
						{!! Form::label('codigo:','CODIGO:',array('class' => 'col-sm-4 control-label'))!!}
							<div class="col-sm-5">
								{!! Form::text('CodSucursal',$codigo,array('id'=>'CodSucursal','class'=>'form-control','required','disabled'))!!}
							</div>
					</div>
					
					

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">NOMBRE:</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" onKeyUp="this.value=this.value.toUpperCase();" />
								</div>
					</div>


						
					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">DIRECCION:</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion" onKeyUp="this.value=this.value.toUpperCase();"  />
								</div>
					</div>






					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
				
						{!!link_to('#',$title='REGISTRAR SUCURSAL',$attributes = ['id'=>'registro-sucursal','class'=>'btn btn-primary'], $secure = null)!!}

					</div>

	

	@section('scripts')
	
		<script src="{{asset('js/script-sucursal.js')}}"></script>

	@stop	

		</div>
{!! Form::close()!!}

</div>
</div>
</div>
</div>
</div>

@stop