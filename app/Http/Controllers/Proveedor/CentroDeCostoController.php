<?php namespace App\Http\Controllers\Proveedor;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\CentroDeCosto;
use App\Models\CentroDeCostoDetalle;
use Illuminate\Http\Request;

class CentroDeCostoController extends Controller {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $centrosDeCosto = CentroDeCostoDetalle::paginate();
        return view('proveedores.costos.index',compact('centrosDeCosto'));
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
        $centroDeCosto = CentroDeCostoDetalle::find($id);
        return view('proveedores.costos.show',compact('centroDeCosto'));
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
