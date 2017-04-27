<!DOCTYPE html>
<html>
<head>
  <title>Reporte Coordinadores Municipales 1</title>
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
    tr,td,th{
      border: solid 1px;
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
     <div><b style="font:100%;margin-left:-30px">Coordinadores Municipales del Estado Falcón</b></div>    
  </div>
</fieldset>
<?php foreach($querys_pdf as $query_pdf): ?>
<br>

<table cellspacing="0" style="width: 100%;">
    <tr>
      <td colspan="1"><strong>Fecha de Registro: </strong><?php echo e($query_pdf->fecha); ?></td>
      <td colspan="2"><strong>Código de Registro: </strong><?php echo e($query_pdf->codigo); ?></td>
    </tr>
    <tr>
      <td><strong>Representante del Municipio: </strong><?php echo e($query_pdf->representante); ?></td>
      <td><strong>Municipio: </strong><?php echo e($query_pdf->municipios_nombre); ?></td>
      <td><strong>Parroquia: </strong><?php echo e($query_pdf->parroquias_nombre); ?></td>
    </tr>
    <tr>
      <td colspan="1"><strong>Nombre y Apellido:</strong><?php echo e($query_pdf->nombre); ?></td>
    <td colspan="2"><strong>C.I:</strong><?php echo e($query_pdf->cedula); ?></td>
    </tr>
    <tr>
      <td colspan="1"><strong>Lugar de Nacimiento:</strong><?php echo e($query_pdf->lugar); ?></td>
      <td colspan="1"><strong>Fecha de Nacimiento:</strong><?php echo e($query_pdf->fecha_n); ?></td>
      <td colspan="1"><strong>Edad:</strong><?php echo e($query_pdf->edad); ?></td>
    </tr>
    <tr>
      <td colspan="3"><strong>Dirección:</strong><?php echo e($query_pdf->direccion); ?></td>
    </tr>
    <tr>
    <td colspan="1"><strong>Telefono:</strong><?php echo e($query_pdf->telefono); ?></td>
    <td colspan="2"><strong>Email:</strong><?php echo e($query_pdf->email); ?></td>
    </tr>

    <tr>
      <td colspan="3"><strong>Dirección de Oficina:</strong><?php echo e($query_pdf->oficina); ?></td>
    </tr>
    <tr>
      <td colspan="1"><strong>Telefono de Oficina:</strong><?php echo e($query_pdf->n_oficina); ?></td>
      <td colspan="2"><strong>Email de Oficina:</strong><?php echo e($query_pdf->email_oficina); ?></td>
    </tr>
</table>
<?php endforeach; ?>
 
</body>
</html>