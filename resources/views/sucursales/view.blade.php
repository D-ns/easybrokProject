@extends('templates.admin_tpl')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Información Sucursales</div>
                <div class="form-group">
                    {!! Form:: label('nombre','Nombre:')!!}
                    {!! $sucursales->NOMBRE !!}
                </div>

                <div class="form-group">
                    {!! Form:: label('creacion','Creacion:')!!}
                    {!! $sucursales->created_at!!}
                </div>

                <div class="form-group">
                    {!! Form:: label('usuario','Usuario Creador:')!!}
                    {!! $sucursales->USUARIOCREACION!!}
                </div>
                <div class="form-group">
                    {!! Form:: label('estado','Estado Cargo:')!!}
                    {!! $sucursales->ESTADO!!}
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



