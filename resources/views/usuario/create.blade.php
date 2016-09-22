@extends('index')

@section('content')

	<div class="container-fluid">
			<div class="row">
			<div class="col-md-15 col-md-offset-15">
			<div class="box box-success">


				<div id=""oscarrrr">
					
				</div>
				<div class="box-header with-border">
			  		<h3 class="box-title">NUEVO USUARIO</h3>
					
					<div class="box-tools pull-right">	
						
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

					</div>


				</div>
			
				<div class="box-body">



					{!! Form::open(array('id' =>'formusuario', 'class'=>'form-horizontal')) !!}


					<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    				<strong> USUARIO AGREGADO CORRECTAMENTE</strong>
					</div>


					
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

		


					<div class="form-group">
						{!! Form::label('username','USERNAME:',array('class' => 'col-sm-4 control-label'))!!}
							<div class="col-sm-5">
									<input type="text" class="form-control" id="Username" name="Username" placeholder="Username" onKeyUp="this.value=this.value.toUpperCase();" />
								</div>
					</div>
					
					

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1"> NOMBRE :</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="First_name" name="First_name" placeholder="Nombre" onKeyUp="this.value=this.value.toUpperCase();" />
								</div>
					</div>


						
					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">APELLIDO :</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Last_name" name="Last_name" placeholder="Apellido" onKeyUp="this.value=this.value.toUpperCase();" />
								</div>
					</div>

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">Email :</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="Email" name="Email" placeholder="Email" onKeyUp="this.value=this.value.toUpperCase();"/>
								</div>
					</div>

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">SUCURSAL :</label>

								<div class="col-sm-5">
								<select class="form-control" name="" id="Sucursal">
										

										<option value="suc01">JOSE ANTONIO</option>
										<option value="suc02">SONESTA</option>
										<option value="suc03">UCCHULLO</option>

										
								</select>
								</div>
					</div>

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">ROL :</label>

								<div class="col-sm-5">
								<select class="form-control" name="Rol" id="Rol">
										

										<option value="administrador">ADMINISTRADOR</option>
										<option value="vendedor">VENDEDOR</option>

								</select>
								</div>

								
					</div>


					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">PASSWORD :</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="Password" name="Password" placeholder="Password" onKeyUp="this.value=this.value.toUpperCase();" />
								</div>
					</div>

					<div class="form-group">
								<label class="col-sm-4 control-label" for="lastname1">CONFIRMAR PASSWORD :</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="Confirm_password" name="Confirm_password" placeholder="Password" onKeyUp="this.value=this.value.toUpperCase();" />
								</div>
					</div>






					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
				
						{!!link_to('#',$title='REGISTRAR NUEVO USUARIO',$attributes = ['id'=>'registro-usuario','class'=>'btn btn-primary'], $secure = null)!!}

					</div>

	

	@section('scripts')
	
	<script src="{{asset('js/script-usuario.js')}}"></script>		

	@stop	

		</div>
{!! Form::close()!!}

</div>
</div>
</div>
</div>
</div>

@stop