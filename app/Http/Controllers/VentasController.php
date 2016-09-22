<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\venta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use DB;

class VentasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index(Request $request)
	{

			$sucursal = Auth::user()->sucursal;

			$ventas = DB::table('users')->join('ventas', 'users.username', '=', 'ventas.vendedor')->select('ventas.*', 'users.sucursal')->where('users.sucursal',$sucursal)->get();

			return view('ventas.index',compact('ventas'));




		//

		/*if ($request->ajax()) {


			$sucursal = Auth::user()->sucursal;

			$ventas = DB::table('users')->join('ventas', 'users.username', '=', 'ventas.vendedor')->select('ventas.*', 'users.sucursal')->where('users.sucursal',$sucursal)->get();
            

            return response()->json($ventas);
            
        }


		return view('ventas.index');*/

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	
	{

		$id = DB::table('ventas')->max('id');
		$codigo = DB::table('ventas')->where('id', $id)->pluck('CodVenta');
		$l=strlen($codigo);
		$partenumeral = (int)substr($codigo,6,$l);
		$partenumeral++;
		$codigo = "venta-".$partenumeral;



		$monedas = DB::table('monedas')->get();
		$users = DB::table('users')->get();

		return view('ventas\create',$arrayName = array('users'=>$users,'codigo'=>$codigo,'monedas'=>$monedas));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		

		if($request->ajax()){

			


            venta::create($request->all());
            return response()->json([
                $request->all()
            ]);
            
            return Redirect::to('venta');
            //return view('ventas.create');

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
	public function edit($CodVenta)
	{
		//$detalles = DB::table('detalleventas')->where('venta',$CodVenta)->get();
		return view('ventas.edit',['CodVenta'=>$CodVenta]);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $Request)
	{
		return view("ventas\index");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return view("ventas\index");
	}

}
