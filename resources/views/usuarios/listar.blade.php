@extends('layouts.default')

@section('content')
<div class="col-lg-9" style="text-align: center">
    @include('elementos.flash')
    <div class="media">
        <a class="pull-left" href="#" style="text-align: center"></a>
        <div id="tablaRegistros" class="media-body">
            <!-- Table -->
          <table id="tablaReg" class="table">
            <tr bgcolor='FFAF36'>
                <td width="2%">Nombre</td>
                <td>Cedula</td>
                <td>Tipo</td>
                <td>Estatus</td>
                <td>Opcion</td>
            </tr>
            @if(isset($usuarios[0]))
                @foreach($usuarios as $usuario)
                <tr>
                    <td>  {{ $usuario->username }} </td>
                    <td>  {{ $usuario->cedula }} </td>
                    <td>  {{ $usuario->tipo }} </td>
                    <td> {{  ( ($usuario->estatus % 2 )  == 0 ) ? 'Suspendido' : 'Activo' }} </td>
                    <td> {!! Form::open(['action' => ['UsuariosController@eliminar', $usuario->id, $usuario->encrypted_id],'method' => 'DELETE']) !!}
                     
                     {!!link_to_action('UsuariosController@modificar', $title = 'Actualizar', $parameters = [$usuario->id, $usuario->encrypted_id], $attributes = ['class' => 'btn btn-success btn-xs'])!!}
                  
                        {!!Form::submit('Eliminar', ['class'=>'btn btn-danger btn-xs'])!!}

                    {!!link_to_action('UsuariosController@cambiarEstatus', $title = 'Cambiar Estatus', $parameters = [$usuario->id, $usuario->encrypted_id], $attributes = ['class' => 'btn btn-primary btn-xs'])!!}

                    {!!link_to_action('UsuariosController@cambiarClave', $title = 'Cambiar Clave', $parameters = [$usuario->id, $usuario->encrypted_id], $attributes = ['class' => 'btn btn-info btn-xs'])!!}

                    {!! Form::close() !!}

                   </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7">No existen registros</td>
                </tr>
            @endif

          </table>
          <div class="pagination" style="text-align:center">
                {!! $usuarios->render() !!}
          </div> 
           <p> Página {{ $usuarios->currentPage() }} de {{ $usuarios->lastPage() }} </p>
        </div>
    </div>
</div>
@endsection