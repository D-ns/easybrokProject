@extends('templates.admin_tpl')
@section('content')
<div class="container">
  
    <a href="{{url('index.php')}}" class="glyphicon glyphicon-share" >Menú</a>
    <br>
    <br>
    <a href="{{url('/cargos/create')}}" class="glyphicon glyphicon-plus" >Añadir</a>
    <br>
     <br>
     
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Cargos</div>
                <div class="panel-body">

                    <table border="0" cellspacing="1" cellpadding="0" width="100%">
                        <tr><td>Nombre</td> <td>Creación</td><td>Modificación</td><td>Usuario</td><td>Estado</td> </tr>
                        @foreach($cargos as $cargo)
                        <?php if ($cargo->ESTADO === 'Activo') { ?>
                            <tr>
                                <td>{{$cargo->NOMBRE}}</td>
                                <td>{{$cargo->created_at}}</td>
                                <td>{{$cargo->updated_at}}</td>
                                <!--<td>{{$cargo->USUARIOCREACION}}</td> -->
                                <td>{{$cargo->ESTADO}}</td>

                                <td> <a href="../cargos/edit/{{$cargo->id}}" class="glyphicon glyphicon-pencil" style=" padding:10%">Edit</a></td>

                                <td> <a href="../cargos/view/{{$cargo->id}}" class=" glyphicon glyphicon-eye-open" style=" padding:10%"> View</a></td>
                                <!--  {!!Form ::model($cargos,['method'=>'DELETE','route'=>['cargos.destroy',$cargo->id]])!!} 
                                   {!! Form:: submit('Eliminar',['class'=>'btn btn-warning form-control'])!!}
                                   {!! Form:: close()!!}-->
                                <td> <a href="../cargos/edit1/{{$cargo->id}}" class=" glyphicon glyphicon-trash" style=" padding:10%">Delet</a></td>

                            </tr>
                        <?php } ?>
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



