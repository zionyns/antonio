<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\detalleingreso;
use App\ingresoproducto;


use Illuminate\Http\Request;

use Auth;
use DB;

class IngresoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

			$sucursal = Auth::user()->sucursal;
			$ingresos = DB::table('ingresoproductos')->where('sucursal',$sucursal)->get();

			return view('ingreso.index',compact('ingresos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$id = DB::table('ingresoproductos')->max('id');
		$codigo = DB::table('ingresoproductos')->where('id', $id)->pluck('CodIngreso');
		$l=strlen($codigo);
		$partenumeral = (int)substr($codigo,4,$l);
		$partenumeral++;
		$codigo = "Ing-".$partenumeral;

	

		$proveedores = DB::table('proveedors')->get();
		$productos = DB::table('productos')->get();
		$sucursales = DB::table('sucursals')->get();


		return view('ingreso.create',array('proveedores' => $proveedores , 'productos'=>$productos,'sucursales'=>$sucursales,'codigo'=>$codigo ));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//


		//crer nuevo codigo autoincrementable

		if($request->ajax()){

			$sucursal = Auth::user()->sucursal;
			$username = Auth::user()->username;

			$codigo = $request->input('CodIngreso');
			$fecha  = $request->input('fecha');




            ingresoproducto::create(['CodIngreso' => $codigo, 'sucursal' => $sucursal,'usuario' => $username,'fecha' => $fecha]);
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
	public function edit($CodIngreso)
	{
		return view('ingreso.edit',['CodIngreso'=>$CodIngreso]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
