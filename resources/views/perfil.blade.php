@extends('index')

@section('content')

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-15 col-md-offset-15">
			<div class="box box-success">
				
				<div class="box-header with-border">
              		<CENTER><h3 class="box-title CENTER">PERFIL</h3></CENTER>
					
					<div class="box-tools pull-right">	
						
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		
					</div>


            	</div>

				
				<div class="box-body">

				<div class="pull image">
                <center><img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" /></center>
            	</div>

				{!! Form::open(array('id' =>'formperfil', 'class'=>'form-horizontal')) !!}

					@foreach ($usuario as $u)

					<div class="form-group">
						{!! Form::label('USERNAME:','NOMBRE DE USUARIO:',array('class' => 'col-sm-4 control-label'))!!}
							
								{{$u->username}}
							
							
					</div>
					<div class="form-group">
						{!! Form::label('NOMBRE:','NOMBRE:',array('class' => 'col-sm-4 control-label'))!!}
							
								{{$u->first_name}}
							
					</div>
					<div class="form-group">
						{!! Form::label('NOMBRE:','APELLIDO:',array('class' => 'col-sm-4 control-label'))!!}
							
								{{$u->last_name}}
							
					</div>

					<div class="form-group">
						{!! Form::label('NOMBRE:','SUCURSAL:',array('class' => 'col-sm-4 control-label'))!!}
							
								{{$u->NombreSucursal}}
							
					</div>
						
                		@endforeach 

                	{!! Form::close()!!}	

				</div>
				</div>
			</div>
		</div>
	</div>
            		
@stop

