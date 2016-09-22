<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UsuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		 if ($request->ajax()) {
            $usuarios = User::all();	
            return response()->json($usuarios);
            
        }
        return view('usuario.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
			if($request->ajax()){

			$nombre = $request->input('first_name');
			$apellido  = $request->input('last_name');
			$rol = $request->input('rol');
			$username  = $request->input('username');
			$email = $request->input('email');
			$password  = Hash::make($request->input('password'));
			$sucursal = $request->input('sucursal');


            User::create(['first_name'=>$nombre, 'last_name'=>$apellido,'rol'=>$rol,'username'=>$username,'email'=>$email, 'password'=>$password,'sucursal'=>$sucursal]);
            return response()->json([
                $request->all()
            ]);

            return Redirect::to('sucursal');

    }

		return "usuario Registrado";
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
		//
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
