@extends('templates.admin_tpl')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <?php echo $mensajes; ?>
                
                {!!Form ::open(['url'=>'sucursales'])!!} <!-- open recibe la la URL donde se pone la petición -->

                <div class="form-group" >
                    {!! Form:: label('nombre','Nombre:')!!}
                    {!! Form:: text('NOMBRE')!!}
                </div>                
                <div class="form-group">
                    {!! Form:: submit('Guardar')!!}
                </div>
                <div class="form-group">
                    {!!link_to('sucursales/index','Cancelar')!!}   
                </div >
                {!! Form:: close()!!}
            </div>
        </div>
    </div>
</div>


@endsection
@section('mensajes')
<label>Mensaje Prueba Yop</label>
@endsection



