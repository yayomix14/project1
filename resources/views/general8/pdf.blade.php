<!DOCTYPE html>
<html>
<head>
  <title>Expreciones Literarias 8</title>
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
     <div><b style="font:100%;margin-left:-30px">Expreciones Literiarias del Estado Falcón</b></div>    
  </div>
</fieldset>
@foreach($querys_pdf as $query_pdf)
<br>
  <div><b>Fecha de Registro: </b>{{$query_pdf->fecha}}</div>
  <div><b>Codigo de Registro: </b>{{$query_pdf->codigo}}</div>
  <div><b>Disciplina: </b>{{$query_pdf->diciplina}}</div>
  <div><b>Desempeño: </b>{{$query_pdf->desempeño}}</div>
  <div><b>Categoria: </b>{{$query_pdf->categoria}}</div>
  <div><b>Nombre y Apellido: </b>{{$query_pdf->nombre}}</div>
  <div><b>Cedula: </b>{{$query_pdf->cedula}}</div>
  <div><b>Lugar de Nacimiento: </b>{{$query_pdf->lugar}}</div>
  <div><b>Fecha de Nacimiento: </b>{{$query_pdf->fecha_n}}</div>
  <div><b>Edad: </b>{{$query_pdf->edad}}</div>
  <div><b>Direcciòn: </b>{{$query_pdf->direccion}}</div>
  <div><b>Municipio: </b>{{$query_pdf->municipio}}</div>
  <div><b>Parroquia: </b>{{$query_pdf->parroquia}}</div>
  <div><b>Telefono: </b>{{$query_pdf->telefono}}</div>
  <div><b>Email: </b>{{$query_pdf->email}}</div>
  <div><b>Condiciòn Actual: </b>{{$query_pdf->condicion}}</div>
   <div><b>Participante de Asociación: </b>{{$query_pdf->participante}}</div>
  <div><b>Tiempo de Trayectoria: </b>{{$query_pdf->trayectoria}}</div>
  <div><b>Nombre de la Asociaciòn: </b>{{$query_pdf->asociacion}}</div>
  <div><b>Especificaciòn de la Actividad que Realiza: </b>{{$query_pdf->actividad}} </div>
  
  <table cellspacing="0" style="width: 100%;">
    <tr>
<tr>
    <td colspan="1"><strong>Fecha de Registro:</strong>{{$query_pdf->fecha}}
    </td>
    <td colspan="2"><strong>Codigo de Registro:</strong>{{$query_pdf->codigo}}
    </td>
</tr>
<tr>
    <td colspan="1"><strong>Disciplina:</strong>{{$query_pdf->diciplina}}
    </td>
    <td colspan="2"><strong>Desempeño:</strong>{{$query_pdf->desempeño}}
    </td>
    <td colspan="3"><strong>Categoria:</strong>{{$query_pdf->categoria}}
    </td>
</tr>
<tr>
    <td colspan="1"><strong>Nombre y Apellido:</strong>{{$query_pdf->nombre}}
    </td>
    <td colspan="2"><strong>C.I:</strong>{{$query_pdf->cedula}}
    </td>
</tr>
<tr>
    <td colspan="1"><strong>Lugar de Nacimiento:</strong>{{$query_pdf->lugar}}
    </td>
    <td colspan="2"><strong>Fecha de Nacimiento: </strong>{{$query_pdf->fecha_n}}
    </td>
    <td colspan="3"><strong>Edad: </strong>{{$query_pdf->edad}}
    </td>
</tr>
<tr>
    <td colspan="3"><strong>Dirección:</strong>{{$query_pdf->direccion}}
    </td>
</tr>
<tr>
    <td colspan="1"><strong>Municipio:</strong>{{$query_pdf->municipios_nombre}}
    </td>
    <td colspan="2"><strong>Parroquia:</strong>{{$query_pdf->parroquias_nombre}}
    </td>
</tr>
<tr>
    <td colspan="1"><strong>Telefono:</strong>{{$query_pdf->telefono}}
    </td>
    <td colspan="2"><strong>Email:</strong>{{$query_pdf->email}}
    </td>
</tr>
<tr>
    <td colspan="1"><strong>Condiciòn Actual:</strong>{{$query_pdf->condicion}}
    </td>
    <td colspan="2"><strong>Participante de Asociaciòn:</strong>{{$query_pdf->partcipante}}
    </td>
    <td colspan="3"><strong>Tiempo de Trayectoria:</strong>{{$query_pdf->trayectoria}}
    </td>
</tr>
<tr>
    <td colspan="1"><strong>Nombre de la Asociaciòn:</strong>{{$query_pdf->asociacion}}
    </td>
   <td colspan="2"><strong>Especificaciòn de la Actividad que Realiza:</strong>{{$query_pdf->actividad}}
   </td>
   </tr>
</tr>
</table>
  @endforeach
</body>
</html>