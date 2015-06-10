<?php

namespace App\Http\Middleware;

use App\Models\SistemaOperacion;
use Closure;

class OperacionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $path=$request->getRequestUri();
        $path = preg_replace('/[1-9]{1,}/', '*', $path);
        $method=$request->getMethod();

        //dd($request);
        $operacion=SistemaOperacion::where('path',$path)->where('method',$method)->select('id_sistema_operacion')->first();

        if(!is_null($operacion)){
            $operacion=$operacion->id_sistema_operacion;
            //dd($operacion);

            if ($request->user()->tieneOperacion($operacion)) {
                return $next($request);
            }

        }
        //dd($operacion);
        if($request->ajax()){
            abort(500);
        }

        return redirect('/')->withErrors(array('operacion' => 'Operacion no permitida para su perfil.'));

    }
}
