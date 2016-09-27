@extends('index')

@section('content')



     
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">    

			

    <div class="container-fluid">
            <div class="row">
            <div class="col-md-6 col-md-offset-15">
            
            
            <div class="box box-success">       
                <div class="box-header with-border">
                    <h3 class="box-title" center>PRODUCTOS FALTANTES</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                    </div>
                </div>
                <div class="box-body">
                <div id="bar">
                
                </div>  
    			
    			</div>      
    </div>
    </div>
    

    

        <div class="col-md-6 col-md-offset-15">
            <div class="box box-success">
            
                <div class="box-header with-border">
                    <h3 class="box-title" center>EVOLCUCION VENTAS</h3>
                    
                    <div class="box-tools pull-right">  
                        
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                    </div>


                </div>

                
                <div class="box-body">
                    
					<div id="donut">
					</div>
                   
    
    			</div>
    </div>
    </div>
    </div>
    </div>
    


			@section('scripts')
	
					<script src="{{asset('js/script-inicio.js')}}"></script>

					
			@stop	

    
@stop

