<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\sucursal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;



use Session;
use Redirect;


class SucursalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function remember(Request $request){

		if ($request->ajax()) {

			$sucursal = $request->input('sucursalsession');


            return response()->json($sucursal);
        }

	}

	public function index(Request $request)
	{
		//
		 if ($request->ajax()) {
            $sucursales = sucursal::all();
            return response()->json($sucursales);
        }
        return view('sucursal.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		//$codigos = DB::table('sucursals')->select('CodSucursal')->get();
		$codigos = DB::table('sucursals')->lists('CodSucursal');

		$l = count($codigos);

		$codigo = $codigos[$l-1];
		
		$partes=explode("0", $codigo);

		$parte1=$partes[0];
		$parte2=$partes[1];

		$int=(int)$parte2;

		$int=$int+1;

		$codigo=$parte1."0".$int;


		return view('sucursal.create',array('codigo' =>$codigo));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		if($request->ajax()){
            sucursal::create($request->all());
            return response()->json([
                $request->all()
            ]);

            return view('sucursal.index');

            

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
	 * @return Response||
	 */
	public function edit($id)
	{



		$sucursal = sucursal::find($id);
        return response()->json($sucursal);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $Request,$id)
	{

		$sucursal = sucursal::find($id);
        $sucursal->fill($Request->all());
        $sucursal->save();
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
		

		$sucursal = sucursal::find($id);
        $sucursal->delete();
        return response()->json(["mensaje"=>"borrado"]);

	}

}
