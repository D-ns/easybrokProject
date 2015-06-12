@extends('templates.admin_tpl')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Sucursal</div>
                {!!Form ::model($cargo,['method'=>'PATCH','action'=>['SucursalesController@update',$sucursales->id] ])!!}                 
                <div class="form-group">
                    {!! Form:: label('nombre','Nombre:')!!}
                    {!! Form:: text('NOMBRE')!!}
                </div>                
                <div class="form-group">
                    {!! Form:: submit('Modificar')!!}
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



