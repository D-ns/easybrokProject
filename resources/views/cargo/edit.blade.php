@extends('templates.admincargo_tpl')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Cargos</div>

               {!!Form ::model($cargo,['method'=>'PATCH','action'=>['CargosController@update',$cargo->id] ])!!} 
                <!--                        <div class="form-group">
                                            {!! Form:: label('id','ID:')!!}
                                            {!! Form:: text('usuario',null,['class'=>'form-control'])!!}
                                        </div>-->


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
                    {!! Form:: submit('Modificar',['class'=>'btn btn-primary form-control'])!!}
                </div>
                {!! Form:: close()!!}



            </div>
        </div>
    </div>
</div>
@endsection













<!--@section('mensajes')
            <label>Este es el area de mensajes</label>
@endsection-->



