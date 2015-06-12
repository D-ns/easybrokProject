@extends('templates.admin_tpl')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Cargos</div>

                <?php if ($camb === 0) { ?>

                    {!!Form ::model($cargo,['method'=>'PATCH','action'=>['CargosController@update',$cargo->id] ])!!} 
                    <!--                        <div class="form-group">
                                                {!! Form:: label('id','ID:')!!}
                                                {!! Form:: text('usuario',null,['class'=>'form-control'])!!}
                                            </div>-->


                    <div class="form-group">
                        {!! Form:: label('nombre','Nombre:')!!}
                        {!! Form:: text('NOMBRE')!!}
                    </div>

                    <!--                <div class="form-group">
                                        {!! Form:: label('creacion','Creacion:')!!}
                                        {!! Form:: text('created_at')!!}
                                    </div>
                    
                                    <div class="form-group">
                                        {!! Form:: label('usuario','Uusario Creador:')!!}
                                        {!! Form:: text('USUARIOCREACION')!!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form:: label('estado','Estado Cargo:')!!}
                                        {!! Form:: text('ESTADO')!!}
                                    </div>-->

                    <div class="form-group">
                        {!! Form:: submit('Modificar')!!}
                    </div>
                    {!! Form:: close()!!}
                    <?php
                } else {
                    ?>
                    {!!Form ::model($cargo,['method'=>'PATCH','action'=>['CargosController@update',$cargo->id] ])!!} 
                    <div class="form-group">
                        {!! Form:: label('nombre','Nombre:')!!}
                        {!! $cargo->NOMBRE !!}
                    </div>

                    <!--  <div class="form-group">
                        {!! Form:: label('creacion','Creacion:')!!}
                        {!! $cargo->created_at!!}
                    </div>

                    <div class="form-group">
                        {!! Form:: label('usuario','Usuario Creador:')!!}
                        {!! $cargo->USUARIOCREACION!!}
                    </div>-->
                    <div class="form-group">
                        <!--{!! Form:: label('estado','Estado Cargo:')!!}-->
                        <a class="sr-only" href="#contenido">
                            {!! Form:: text('ESTADO','Eliminado')!!}
                        </a>
                    </div>
                    <div class="form-group">
                        {!! Form:: submit('Eliminar')!!}
                    </div>
                    {!! Form:: close()!!}
                <?php }
                ?>


            </div>
           
        </div>
         <div class="form-group">
                   <a href="{{url('cargos/index')}}" class="glyphicon glyphicon-remove" >Cancelar</a> 
            </div >
    </div>
</div>
@endsection













<!--@section('mensajes')
            <label>Este es el area de mensajes</label>
@endsection-->



