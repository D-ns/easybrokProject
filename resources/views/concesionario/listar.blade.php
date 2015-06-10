@extends('templates.adminconcesionario_tpl')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">PRUEBAS DE GIT 06/09/2015</div>
                <div class="panel-body">

                    <table border="0" cellspacing="1" cellpadding="0" width="100%">
                        <tr><td>Nombre</td> <td>Creación</td><td>Usuario</td><td>Estado</td> </tr>
                        @foreach($concesionario as $concesionario)
                        <tr>
                            <td>{{$concesionario->NOMBRE}}</td>
                            <td>{{$concesionario->CREACION}}</td>
                            <td>{{$concesionario->USUARIOCREACION}}</td> 
                            <td>{{$concesionario->ESTADO}}</td>
                            <td>{{$concesionario->id}}</td>
                            <td> <a href="../concesionario/{{$concesionario->id}}/edit" class="btn btn-warning"> Editar</a>                  </td>
                            <td> <a href="../concesionario/{{$concesionario->id}}/view" class="btn btn-warning"> Visualizar</a></td>
                            <td>
                                {!!Form ::model($concesionario,['method'=>'DELETE','route'=>['concesionario.destroy',$concesionario->id] ])!!} 
                                {!! Form:: submit('Eliminar',['class'=>'btn btn-warning form-control'])!!}
                                {!! Form:: close()!!}

                            </td>


                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection













<!--@section('mensajes')
            <label>Este es el area de mensajes</label>
@endsection-->



