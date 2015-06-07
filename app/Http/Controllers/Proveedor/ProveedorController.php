<?php namespace App\Http\Controllers\Proveedor;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Psy\Command\ListCommand\PropertyEnumerator;

class ProveedorController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $proveedores = Proveedor::all();
        return view('proveedores.index',compact('proveedores'));
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
        $proveedor = Proveedor::find($id);
        return view('proveedores.show',compact('proveedor'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $proveedor = Proveedor::find($id);
        return view('proveedores.edit',compact('proveedor'));
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
		$proveedor=Proveedor::findOrFail($id);
       // $proveedor->find($id);
        //Proveedor::destroy($id);
        $proveedor->delete();


        Session::flash('message','El proveedor '.$proveedor->full_name.' fue eliminado');


        return redirect()->route('proveedores.index');
	}

}
