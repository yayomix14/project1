@extends('layouts.default')

@section('content')

<div class="col-lg-9" style="text-align: center">
    @include('elementos.flash')
    <div class="media">
        <a class="pull-left" href="#" style="text-align: center"></a>
        <div id="tablaRegistros" class="media-body">
            <!-- Table -->
            <div class="col-md-12" style="margin-bottom:5%;">
                {{ Form::open(array('url' => 'general2', 'method' => 'GET','role'=>'search')) }}
                <div class="col-md-6">
                {{ Form::text('nombre', null, ['id' =>  'producto', 'placeholder' =>  'Buscar Nombre','class'=>'form-control'])}}
                </div>
                <div class="col-md-1">
                {{ Form::button('<i class="fa fa-search"></i>', ['type' => 'submit', 'class' => 'btn btn-default btn-sm'] )  }}

                </div>
                <div class="col-md-5">
                    <a href="/general2/create" class="btn pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo Registro</a>
                </div>
                {!!Form::close()!!}
            </div>
              <table class="table">
                <tr bgcolor='FFAF36'>
                    <td>#</td>           
                    <td>Nombre</td>
                    <td>Cedula</td>
                    <td>Email</td>
                    <td>Estatus</td>
                    <td>Opcion</td>
                </tr>
                @foreach($querys as $query)    
                    <tr>
                        <td>{{$query->id}}</td>
                        <td>  {{str_limit($query->nombre,10)}} </td>
                        <td>  {{str_limit($query->cedula,10)}} </td>
                        <td>  {{str_limit($query->email,10)}}</td>
                        <td> {{date('d-m-Y',strtotime($query->fecha_n))}} </td>
                        <td>
                        <a href="/general2/edit/{{$query->id}}" class="btn btn-xs "><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                        <a href="/general2/destroy/{{$query->id}}" onclick="return pregunta_eliminar(this)" class="btn btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i></a> 
                        <a href="/general2_pdf/{{$query->id}}" onclick="return pregunta_pdf(this)" class="btn  btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                    </tr>
                    @endforeach
              </table>
          {!!$querys->render()!!}
        </div>
    </div>
</div>
@endsection