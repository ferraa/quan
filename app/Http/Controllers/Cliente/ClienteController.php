<?php namespace App\Http\Controllers\Cliente;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
      //  $clientes = Cliente::name($request->get('name'))->paginate();
        $clientes = Cliente::all();
        return view('clientes.index',compact('clientes'));
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
        $cliente = Cliente::find($id);
        return view('clientes.show',compact('cliente'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $cliente= Cliente::find($id);
       // $cliente->domicilios()->attach(1);
        dd($cliente);
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
     * @param  int $id
     * @param Request $request
     * @return Response
     */
	public function destroy($id,Request $request)
	{
        //abort(500);
        $cliente=Cliente::find($id);

        $cliente->delete();

        $mensaje='El cliente '.$cliente->full_name.' fue eliminado';

        if($request->ajax()){
            return response()->json([
                'id' => $cliente->id_cliente,
               'mensaje'=>$mensaje
            ]);
        }


        Session::flash('message',$mensaje);


        return redirect()->route('clientes.index');
	}

}
