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
		        <td>Ip</td>
		        <td>Usuario</td>
		        <td>Intentos</td>
		        <td>Fecha</td>
                <td>Accion</td>
            </tr>
            @if(isset($registros[0]))
                @foreach($registros as $registro)
                <tr>
		            <td>  {{ $registro->ip }}  </td>
		            <td>  {{ $registro->usuario }}  </td>
                    <td>  {{ $registro->intentos }}  </td>
                    <td>  {{ $registro->fecha }}  </td>
                    <td>  
                        {!!link_to_action('AuditoriaController@desbloquearIp', $title = 'Desbloquear', $parameters = [$registro->ip], $attributes = ['class' => 'btn btn-danger btn-xs'])!!}
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7">No existen registros</td>
                </tr>
            @endif

          </table>
            
        </div>
    </div>
</div>
@endsection