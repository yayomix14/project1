<!DOCTYPE html>
<html>
<head>
  <title>Infraestructura y Activaciòn Cultural 2</title>
  <style type="text/css">
    fieldset {position:relative} /* For legend positioning */
    #el01 legend {padding:0} /* Remove padding */
    #el02 legend { /* Text and background colour, blue on light gray */
    color:#00f;
    background-color:#ddd;
    }
    #el03 legend {background:url(/i/icon-info.gif) no-repeat 100% 50%} /* Background image */
    #el04 legend {margin:0} /* Remove margin */
    #el05 legend {border:2px dotted #00f} /* Border width, style and colour */
    #el06 legend { /* Position at top left corner of fieldset */
    position:absolute;
    top:0;
    left:0;
    }
    #el07 legend {font-family:"Courier New",Courier} /* Different font */
    #el08 legend {font-size:2em} /* Bigger text */
    #el09 legend {font-size:0.5em} /* Smaller text */
    #el10 legend {font-weight:bold} /* Bold text */
    #el11 legend {padding:2em} /* Increase padding */
    #el12 legend {text-align:right} /* Change text alignment */

    div{
      font-size: 15px;
    }
    b{
      text-align: center;
    }
  </style>
</head>
<body>
<fieldset id="el##">
<legend><b>INCUDEF</b></legend>
  <img src="../public/img/gobierno.jpg" alt="" style="width: 200px; ">
  <img src="../public/img/ejemplo.png" alt="" style="width: 200px; margin-left: 600px;">
  <div style="position: absolute; margin-left: -600px;">
    <div><b style="font:120%;margin-left:-100px">Sistema Estadal de Registro de Diversidad Cultural</b></div>
     <div><b style="font:100%;margin-left:-30px">Infraestructura y Activaciòn Cultural del Estado Falcón</b></div>    
  </div>
</fieldset>
@foreach($querys_pdf as $query_pdf)
<br>
 {{--  <div><b>Fecha de Registro: </b>{{$query_pdf->fecha}}</div>
  <div><b>Codigo de Registro: </b>{{$query_pdf->codigo}}</div>
  <div><b>Nombre: </b>{{$query_pdf->nombre}}</div>
  <div><b>Director o Representante: </b>{{$query_pdf->representante}}</div>
  <div><b>Titularidad: </b>{{$query_pdf->titularidad}}</div>
  <div><b>RIF: </b>{{$query_pdf->rif}}</div>
  <div><b>Objeto: </b>{{$query_pdf->objeto}}</div>
  <div><b>Tipo: </b>{{$query_pdf->tipo}}</div>
  <div><b>Direcciòn: </b>{{$query_pdf->direccion}}</div>
  <div><b>Fecha de Creada: </b>{{$query_pdf->fecha_creada}}</div>
  <div><b>Municipio: </b>{{$query_pdf->municipios_nombre}}</div>
  <div><b>Parroquia: </b>{{$query_pdf->parroquias_nombre}}</div>
  <div><b>Telefono: </b>{{$query_pdf->telefono}}</div>
  <div><b>Correo: </b>{{$query_pdf->email}}</div>
  <div><b>Estado Actual: </b>{{$query_pdf->estado_actual}}</div>
  <div><b>Servicio: </b>{{$query_pdf->servicio}}</div>
  <div><b>Paredes de: </b>{{$query_pdf->paredes}}
  <div><b>Techo de: </b>{{$query_pdf->techo}}</div>
  <div><b>Piso de: </b>{{$query_pdf->Piso}}</div>
 --}}

 <table cellspacing="0" style="width: 100%;">
    <tr>
      <td colspan="1"><strong>Fecha de Registro: </strong>{{$query_pdf->fecha}}</td>
      <td colspan="2"><strong>Código de Registro: </strong>{{$query_pdf->codigo}}</td>
    </tr>
    <tr>
      <td colspan="1"><strong>Nombre:</strong>{{$query_pdf->nombre}}</td>
      <td colspan="2"><strong>Director o Representante Legal:</strong>{{$query_pdf->representante}}</td>
    </tr>
   <tr>
      <td colspan="1"><strong>Objeto:</strong>{{$query_pdf->objeto}}</td>
      <td colspan="2"><strong>Tipo:</strong>{{$query_pdf->tipo}}</td>
    </tr>
    <tr>
      <td colspan="1"><strong>RIF:</strong>{{$query_pdf->rif}}</td>
      <td colspan="2"><strong>Titularidad:</strong>{{$query_pdf->titularidad}}</td>
    </tr>
    <tr>
      <td colspan="3"><strong>Dirección:</strong>{{$query_pdf->direccion}}</td>
    </tr>
 <tr>
      <td colspan="1"><strong>Municipio: </strong>{{$query_pdf->municipios_nombre}}</td>
      <td colspan="2"><strong>Parroquia: </strong>{{$query_pdf->parroquias_nombre}}</td>
    </tr>
    <tr>
      <td colspan="1"><strong>Telefono:</strong>{{$query_pdf->telefono}}</td>
      <td colspan="2"><strong>Email:</strong>{{$query_pdf->email}}</td>
    </tr>
    <tr>
      <td colspan="1"><strong>Condicion Actual:</strong>{{$query_pdf->actual}}</td>
      <td colspan="2"><strong>Fecha de Creada:</strong>{{$query_pdf->fecha_creada}}</td>
    </tr>
    <tr>
      <td colspan="3"><strong>Servicio:</strong>{{$query_pdf->servicio}}</td>
     
    </tr>
    <tr>
      <td colspan="1"><strong>Paredes de :</strong>{{$query_pdf->paredes}}</td>
      <td colspan="2"><strong>Techo de:</strong>{{$query_pdf->techo}}</td>
      <td colspan="3"><strong>Piso de:</strong>{{$query_pdf->piso}}</td>
    </tr>
    
    </table>
 @endforeach 
</body>
</html>