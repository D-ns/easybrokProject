<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Http\Requests;
use App\Tmp_cargo;

class CargosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
      
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    $mensaje=null;
            return view('cargo.crear')->with('mensajes',$mensaje);
            
          
            
	}
        
        public function lista()
        {
            
           $cargos= Tmp_cargo::all();
           return view('cargo.listar',compact('cargos'));
        }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
         
          //$valor='Activo';
          $mensaje='Cargo Guardado Correctamente';
          $input= Request::all();
          Tmp_cargo::create($input);
          return view('cargo.crear')->with('mensajes',$mensaje);
          
          
//         $cargo= new Tmp_cargo();
//         $cargo->NOMBRE=Input::get('NOMBRE');
//         $validator=  Tmp_cargo::validate(array('NOMBRE'=> Input::get('NOMBRE')));
//          
//          if($validator->fails){
//              $error=$validator->messages()->all();
//              return view('cargo.index')->with('mensajes',$error); 
//       
//              
//          }
//          else{
//              Tmp_cargo::create($input);
//              return view('cargo.index')->with('mensajes',$mensaje); 
//           
//          }
           }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
//	public function show($id)
//	{
//        $cargo=  CargosController::find($id);
//        return($cargo);
//	}
        
        public function show()
	{
        $cargos= Tmp_cargo::all(); //tiene que ir deley esto para que se pueda listar aqui se selecciona los datos de la tabla
        return view('cargo.listar',compact('cargos'));
        }
        
      
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $camb=0;
        $cargo= Tmp_cargo::find($id);
        return view ('cargo.edit', compact('cargo'))->with('camb',$camb);
         
        }
        
        public function edit1($id)
	{
        $cargo= Tmp_cargo::find($id);
        $camb=1;
        return view ('cargo.edit', compact('cargo'))->with('camb',$camb);
         
        }
        
        
        public function view($id)
	{
        $cargo= Tmp_cargo::find($id);
        return view ('cargo.view', compact('cargo'));
         
        }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
       public function update($id,Requests\CreateCargoRequest $request){
        
        $cargos= Tmp_cargo::find($id);
        $cargos->update($request->all());
        $cargos=Tmp_cargo::all();
        //$mensaje='Correcto';
        return view('cargo.listar', compact('cargos'));
        
          }
        /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $cargos=Tmp_cargo::find($id);
            $cargos= Tmp_cargo::all(); //tiene que ir deley esto para que se pueda listar aqui se selecciona los datos de la tabla
            return view('cargo.listar',compact('cargos'));
           
          // $mensaje='Eliminado Correctamente';
          // return view('cargo.listar')->with('mensajes',$mensaje);
       }
       
//        public function update1($id){
//        
//        $cargo= Tmp_cargo::find($id);
//        $cargo= new Tmp_cargo();
//        $cargo->ESTADO='P';
//        $cargo->update();
//        $mensaje='Cambio Estado';
//        return view('cargo.index')->with('mensajes',$mensaje);
//       
//        
//       }
       

}
