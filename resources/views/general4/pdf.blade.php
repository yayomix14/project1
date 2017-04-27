<!DOCTYPE html>
<html>
<head>
  <title>Asociaciones y Fundaciones 4</title>
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
  <img src="../public/img/Picture2.png" alt="" style="width: 200px; ">
  <img src="../public/img/Picture1.png" alt="" style="width: 200px; margin-left: 600px;">
  <div style="position: absolute; margin-left: -600px;">
    <div><b style="font:120%;margin-left:-100px">Sistema Estadal de Registro de Diversidad Cultural</b></div>
     <div><b style="font:100%;margin-left:-30px">Asociaciones y Fundaciones del Estado Falcón</b></div>    
  </div>
</fieldset>
@foreach($querys_pdf as $query_pdf)
<br>
 {{--  <div><b>Fecha de Registro: </b>{{$query_pdf->fecha}}</div>
  <div><b>Codigo de Registro: </b>{{$query_pdf->codigo}}</div>
  <div><b>Nombre: </b>{{$query_pdf->nombre}}</div>
  <div><b>Nombre de Representante: </b>{{$query_pdf->nombre_r}}</div>
  <div><b>Rif: </b>{{$query_pdf->rif}}</div>
  <div><b>Disciplina: </b>{{$query_pdf->diciplina}}</div>
  <div><b>Categoria: </b>{{$query_pdf->categoria}}</div>
  <div><b>Direcciòn: </b>{{$query_pdf->direccion}}</div>
  <div><b>Municipio: </b>{{$query_pdf->municipios_nombre}}</div>
  <div><b>Parroquia: </b>{{$query_pdf->parroquias_nombre}}</div>
  <div><b>Telefono: </b>{{$query_pdf->telefono}}</div>
  <div><b>Email: </b>{{$query_pdf->email}}</div>
  <div><b>Objeto: </b>{{$query_pdf->objeto}}</div>
  <div><b>Datos de Registro Legal: </b>{{$query_pdf->dato}}</div>
  <div><b>Fecha de Fundada: </b>{{$query_pdf->fundada}}</div>
  <div><b>Condiciòn Actual: </b>{{$query_pdf->condicion}}</div>
  <div><b>Participante: </b>{{$query_pdf->partcipante}}</div>
  <div><b>Tiempo de Trayectoria: </b>{{$query_pdf->trayectoria}}</div> --}}
  

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
      <td colspan="3"><strong>RIF:</strong>{{$query_pdf->rif}}</td>
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
        <td colspan="1"><strong>Datos de Registro Legal:</strong>{{$query_pdf->dato}}</td>
        <td colspan="2"><strong>Objeto:</strong>{{$query_pdf->objeto}}</td> 
 </tr>
    <tr>
        <td colspan="1"><strong>Condiciòn Actual:</strong>{{$query_pdf->condicion}}</td>
        <td colspan="2"><strong>Tiempo de Trayectoria:</strong>{{$query_pdf->trayectoria}}</td>
        <td colspan="3"><strong>Participante:</strong>{{$query_pdf->participante}}</td>
  </tr>
</table>
  @endforeach
</body>
</html>