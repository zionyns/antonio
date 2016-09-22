<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use Redirect;
use App\sucursal;
use DB;

use Illuminate\Http\Request;

class AuthController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function recordarsucursal(){




	}


	public function showLogin()
    {
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
        	
        		return Redirect::to('/');
        	
        }
        // Si no hay sesión activa mostramos el formulario
        return view('login');
    }
 
    public function postLogin()
    {
        // Obtenemos los datos del formulario
        $data = [
            'username' => Input::get('username'),
            'password' => Input::get('password'),

        ];

        // Verificamos los datos
        if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
        {
        		return Redirect::intended('/');
            // Si nuestros datos son correctos mostramos la página de inicio
            //return Redirect::intended('/');
        }
        // Si los datos no son los correctos volvemos al login y mostramos un error
        return Redirect::back()->with('error_message', 'M1')->withInput();


    }

    public function perfil(){


		$name=Auth::user()->username;
		$sucursal=Auth::user()->sucursal;


		$usuario = DB::table('users')->join('sucursals', 'users.sucursal', '=', 'sucursals.CodSucursal')
		->select('users.*','sucursals.NombreSucursal')->where('users.username',$name)->get();

		//$perfil = DB::table('users')->join('sucursal', 'detalleingresos.producto', '=', 'productos.CodProducto')->select('detalleingresos.*', 'productos.nombre')->get();
		return view('perfil',compact('usuario'));
		//return Redirect::to('perfil')->with('usuario', $usuario);

    }
 
    public function logOut()
    {
        // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('login')->with('error_message', 'M2');
    }

	public function showhome()
	{
		return view('index');
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
	public function store()
	{
		//
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
