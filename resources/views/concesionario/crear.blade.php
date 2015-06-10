@extends('templates.adminconcesionario_tpl')
@section('content')



                        {!!Form ::open(['url'=>'concesionario'])!!} 
                       <div class="form-group">
                           
                            {!! Form:: label('id','ID:')!!}
                          

                            {!! Form:: text('id',null,['class'=>'form-control'])!!}
                        </div>

                        
                        <div class="form-group">
                           
                            {!! Form:: label('nombre','Nombre:')!!}
                            {!! Form:: text('NOMBRE',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form:: label('creacion','Creacion:')!!}
                            {!! Form:: text('CREACION',null,['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form:: label('usuario','Uusario Creador:')!!}
                            {!! Form:: text('USUARIOCREACION',null,['class'=>'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form:: label('estado','Estado Cargo:')!!}
                            {!! Form:: text('ESTADO',null,['class'=>'form-control'])!!}
                        </div>
                        
                        
                          <div class="form-group">
                            {!! Form:: submit('guardar',['class'=>'btn btn-primary form-control'])!!}
                        </div>
                        
                        <div class="form-group">
                        {!!link_to('concesionario/index','Cancelar')!!}    
                        
                        
                        </div >
                        {!! Form:: close()!!}
                    
@endsection


<!--@section('mensajes')
            <label>Este es el area de mensajes</label>
@endsection-->



