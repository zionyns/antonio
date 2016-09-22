<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\proveedor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Redirect;


class ProveedorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$proveedores = proveedor::All();
		return view('proveedor.index',compact('proveedores'));

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
		$proveedor = proveedor::find($id);
		return view('proveedor.edit',['proveedor'=>$proveedor]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $Request)
	{
		$proveedor = proveedor::find($id);
		$proveedor -> fill($Request->all());
		$proveedor -> save();

		Session::flash('mensaje','proveedor editado correctamente');
		return Redirect::to('/proveedor');	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		proveedor::destroy($id);
		Session::flash('mensaje','´proveedor eliminada correctamente');
		return Redirect::to('/proveedor');
	}

}
