<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\tmp_concesionario;






//use Illuminate\Http\Request;

class ConcesionarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		 return view('concesionario.crear');	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
        
        
        public function listar()
        {
            
           //$concesionario= tmp_concesionario::all();
           $concesionario = \App\tmp_concesionario::all();
           return view('concesionario.listar',compact('concesionario'));
        }
        
        
	public function store()
	{
            $mensaje='Concesionario Guardado Correctamente';
            $input= Request::all();
            tmp_concesionario::create($input);
            return view('concesionario.index')->with('mensajes',$mensaje);
                         
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $concesionario= tmp_concesionario::all(); //tiene que ir deley esto para que se pueda listar aqui se selecciona los datos de la tabla
            return view('concesionario.listar',compact('concesionario'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $concesionario= Tmp_concesionario::find($id);
        return view ('concesionario.edit', compact('concesionario'));
	}

         public function view($id)
	{
        $concesionario= tmp_concesionario::find($id);
        return view ('concesionario.view', compact('concesionario'));
         
        }
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
        
               

	public function update($id,Requests\CreateConcesionarioRequest $request){
        
        $concesionario= tmp_concesionario::find($id);
        $concesionario->update($request->all());
        $mensaje='Guardado Correctamente';
        return view('concesionario.index')->with('mensajes',$mensaje);
        
          }
 
        
        
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	   $concesionario=  tmp_concesionario::find($id);
           $concesionario->delete();
           $mensaje='Eliminado Correctamente';
           return view('concesionario.index')->with('mensajes',$mensaje);
	}
       

}
