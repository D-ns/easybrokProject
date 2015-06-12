@extends('templates.admin_tpl')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Sucursales</div>
                <div class="panel-body">
                    <table border="0" cellspacing="1" cellpadding="0" width="100%">
                        <tr><td>Nombre</td> <td>Creación</td><td>Modificación</td><td>Usuario</td><td>Estado</td> </tr>
                        @foreach($sucursales as $sucursal)
                        <tr>
                            <td>{{$sucursal->NOMBRE}}</td>
                            <td>{{$sucursal->created_at}}</td>
                            <td>{{$sucursal->updated_at}}</td>
                            <td>{{$sucursal->USUARIOCREACION}}</td> 
                            <td>{{$sucursal->ESTADO}}</td>
                            <td> <a href="../sucursales/edit/{{$sucursal->id}}" class="btn btn-warning"> Editar</a>                  </td>
                            <td> <a href="../sucursales/view/{{$sucursal->id}}" class="btn btn-warning"> Visualizar</a></td>
                            <td>
                                {!!Form ::model($sucursales,['method'=>'DELETE','route'=>['sucursales.destroy',$sucursal->id]])!!} 
                                {!! Form:: submit('Eliminar',['class'=>'btn btn-warning form-control'])!!}
                                {!! Form:: close()!!}
                                
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="{{url('/sucursales/create')}}" class="btn btn-warning" style="background:#0A0">Nuevo</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection













<!--@section('mensajes')
            <label>Este es el area de mensajes</label>
@endsection-->



