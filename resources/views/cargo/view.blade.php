@extends('templates.admin_tpl')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Información Cargos</div>

                <!--{{$cargo->NOMBRE}}
                {!!Form ::model($cargo,['method'=>'PATCH','action'=>['CargosController@update',$cargo->id] ])!!} 
                                        <div class="form-group">
                                            {!! Form:: label('id','ID:')!!}
                                            {!! Form:: text('usuario',null,['class'=>'form-control'])!!}
                                        </div>-->

                <div class="form-group">
                    {!! Form:: label('nombre','Nombre:')!!}
                    {!! $cargo->NOMBRE !!}
                </div>

                <div class="form-group">
                    {!! Form:: label('creacion','Creacion:')!!}
                    {!! $cargo->created_at!!}
                </div>

                <div class="form-group">
                    {!! Form:: label('usuario','Usuario Creador:')!!}
                    {!! $cargo->USUARIOCREACION!!}
                </div>
                <div class="form-group">
                    {!! Form:: label('estado','Estado Cargo:')!!}
                    {!! $cargo->ESTADO!!}
                </div>

                {!! Form:: close()!!}
                </div>
             
        </div>
        <div class="form-group">
                    <a href="{{url('cargos/index')}}" class="glyphicon glyphicon-hand-left" >Regresar</a> 
        </div >
    </div>
</div>
@endsection













<!--@section('mensajes')
            <label>Este es el area de mensajes</label>
@endsection-->



