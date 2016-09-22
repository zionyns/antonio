<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\detalleingreso;
use DB;

use Illuminate\Http\Request;

class DetalleIngresoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function detalles(Request $request,$ingreso){

			

		if($request->ajax()){

		$detalles = DB::table('detalleingresos')->join('productos', 'detalleingresos.producto', '=', 'productos.id')
		->select('detalleingresos.id','detalleingresos.Cantidad','detalleingresos.Peso','detalleingresos.Precio','detalleingresos.ingreso', 'productos.CodProducto')

		->where('ingreso',$ingreso)->get();
			
			//$detalles=DB::table('detalleventas')->where('venta',$venta)->get();		
	   	return response()->json($detalles);	
		}
	}




	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		

		if($request->ajax()){


			$cantidad = $request->input('Cantidad');
       		$producto = $request->input('Producto');

			DB::table('productos')->where('id',$producto)->increment('stock', $cantidad);

            detalleingreso::create($request->all());
       		
            return response()->json([
                $request->input('Cantidad'),
                $request->input('Producto')
            ]);
            
            return Redirect::to('sucursal');

        }





	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		$detalle = detalleingreso::find($id);
        return response()->json($detalle);	


	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		

		$detalle = detalleingreso::find($id);
        $detalle->fill($request->all());
        $detalle->save();
        return response()->json(["mensaje" => "listo"]);



	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
