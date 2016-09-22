<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\detalleventa;
use Illuminate\Http\Request;
use DB;

class DetalleVentaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response



	 */
	public function detalles(Request $request,$venta){

			

		if($request->ajax()){

		$detalles = DB::table('detalleventas')->join('productos', 'detalleventas.producto', '=', 'productos.id')
		->select('detalleventas.id','detalleventas.descripcion','detalleventas.cantidad','detalleventas.total','detalleventas.venta', 'productos.CodProducto')

		->where('venta',$venta)->get();
			
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
	public function store( Request $request)
	{

		if($request->ajax()){

            detalleventa::create($request->all());

            $cantidad = $request->input('cantidad');
       		$producto = $request->input('producto');

			DB::table('productos')->where('id',$producto)->decrement('stock', $cantidad);


            return response()->json([
                $request->all()
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
		$detalle = detalleventa::find($id);
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
		//

		$detalle = detalleventa::find($id);
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

		//buscamos la venta que hace referencia a este detalle, y el detalle
		$venta = DB::table('detalleventas')->select('venta')->where('id',$id)->get();
		//precio del detalle		



		$detalle = detalleventa::find($id);
        $detalle->delete();
        return response()->json(["mensaje"=>"borrado"]);
	}

}
