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
                <td width="2%">Nº</td>
		        <td>Ip</td>
		        <td>Nombre</td>
		        <td>Tipo</td>
		        <td>Accion</td>
		        <td>Fecha</td>
                <td>Hora</td>
            </tr>
            @if(isset($registros[0]))
                @foreach($registros as $registro)
                <tr>
                    <td>  {{ $registro->id }}  </td>
		            <td>  {{ $registro->ip }}  </td>
		            <td>  {{ $registro->usuario }}  </td>
		            <td>  {{ $registro->tipo }}  </td>
		            <td>  {{ $registro->accion }}  </td>
		            <td>  {{ $registro->fecha }}  </td>
                    <td>  {{ $registro->hora }}  </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7">No existen registros</td>
                </tr>
            @endif

          </table>
            <div class="pagination" style="text-align:center">
                {!! $registros->render() !!}
            </div>
            <p> Página {{ $registros->currentPage() }} de {{ $registros->lastPage() }} </p>    
        </div>
    </div>
</div>
@endsection