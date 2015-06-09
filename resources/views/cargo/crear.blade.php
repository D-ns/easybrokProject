@extends('templates.admincargo_tpl')
@section('content')

                       {!!Form ::open(['url'=>'cargos'])!!} <!-- open recibe la la URL donde se pone donde la petición -->
                        
                         <div class="form-group">
                           
                            {!! Form:: label('id','ID:')!!} <!-- el primer parametro sera el atributo for y el segundo lo que se muestra la etiqueta -->
                            {!! Form:: text('id',null,['class'=>'form-control'])!!}  <!-- se pone los nombres de los campos de la BD-->
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
                        {!!link_to('cargos/index','Cancelar')!!}    
                        
                        
                        </div >
                        {!! Form:: close()!!}





@endsection
@section('mensajes')
<label>Mensaje Prueba Yop</label>
@endsection



