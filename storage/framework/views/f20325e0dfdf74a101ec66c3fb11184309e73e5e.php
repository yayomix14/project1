<!DOCTYPE html>
<html>
<head>
  <title>Museo del Estado 3</title>
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
     <div><b style="font:100%;margin-left:-30px">Museo del Estado Falcón</b></div>    
  </div>
</fieldset>
<?php foreach($querys_pdf as $query_pdf): ?>
<br>
<?php /*   <div><b>Fecha de Registro: </b><?php echo e($querys_pdf->fecha); ?></div>
  <div><b>Codigo de Registro: </b><?php echo e($querys_pdf->codigo); ?></div>
  <div><b>Nombre: </b><?php echo e($querys_pdf->nombre); ?></div>
  <div><b>Nombre de Representante: </b><?php echo e($querys_pdf->nombre_r); ?></div>
  <div><b>RIF: </b><?php echo e($querys_pdf->rif); ?></div>
  <div><b>Direcciòn: </b><?php echo e($querys_pdf->direccion); ?></div>
  <div><b>Descripción del Espacio: </b><?php echo e($querys_pdf->descripcion); ?></div>
  <div><b>Titularidad: </b><?php echo e($querys_pdf->titularidad); ?></div>
  <div><b>Tiempo de Creada: </b><?php echo e($querys_pdf->fecha_n); ?></div>
  <div><b>Tipo de Colección: </b><?php echo e($querys_pdf->tipo); ?></div>
  <div><b>Municipio: </b><?php echo e($querys_pdf->municipios_nombre); ?></div>
  <div><b>Parroquia: </b><?php echo e($querys_pdf->parroquias_nombre); ?></div>
  <div><b>Telefono: </b><?php echo e($querys_pdf->telefono); ?></div>
  <div><b>Email: </b><?php echo e($querys_pdf->email); ?></div>
  <div><b>Nombre de Asociación: </b><?php echo e($querys_pdf->asociacion); ?></div>
  <div><b>Telefono de Referencia: </b><?php echo e($querys_pdf->telefono_r); ?></div>
  <div><b>Correo de Representante: </b><?php echo e($querys_pdf->email_r); ?></div>
  <div><b>Condiciòn Actual: </b><?php echo e($querys_pdf->condicion); ?></div>
  <div><b>Servicio: </b><?php echo e($querys_pdf->servicio); ?></div>
  <div><b>Paredes de: </b><?php echo e($querys_pdf->paredes); ?></div>
  <div><b>Techo de: </b><?php echo e($querys_pdf->techo); ?></div>
  <div><b>Piso de: </b><?php echo e($querys_pdf->piso); ?></div> */ ?>

<table cellspacing="0" style="width: 100%;">
    <tr>
      <td colspan="1"><strong>Fecha de Registro: </strong><?php echo e($query_pdf->fecha); ?></td>
      <td colspan="2"><strong>Código de Registro: </strong><?php echo e($query_pdf->codigo); ?></td>
    </tr>
    <tr>
      <td colspan="1"><strong>Nombre:</strong><?php echo e($query_pdf->nombre); ?></td>
      <td colspan="2"><strong>Director o Representante Legal:</strong><?php echo e($query_pdf->representante); ?></td>
    </tr>
   <tr>
      <td colspan="1"><strong>Objeto:</strong><?php echo e($query_pdf->objeto); ?></td>
      <td colspan="2"><strong>Tipo:</strong><?php echo e($query_pdf->tipo); ?></td>
    </tr>
    <tr>
      <td colspan="1"><strong>RIF:</strong><?php echo e($query_pdf->rif); ?></td>
      <td colspan="2"><strong>Titularidad:</strong><?php echo e($query_pdf->titularidad); ?></td>
    </tr>
    <tr>
      <td colspan="3"><strong>Dirección:</strong><?php echo e($query_pdf->direccion); ?></td>
    </tr>
 <tr>
     <td colspan="3"><strong>Descripción del Espacio:</strong><?php echo e($query_pdf->descripcion); ?></td>
    </tr>
 <tr>
    </tr>
 <tr>
     <td colspan="1"><strong>Nombre de la Asociación:</strong><?php echo e($query_pdf->asociacion); ?></td>
     <td colspan="2"><strong>Tipo de Colección:</strong><?php echo e($query_pdf->tipo); ?></td>
    </tr>
 <tr>
      <td colspan="1"><strong>Municipio: </strong><?php echo e($query_pdf->municipios_nombre); ?></td>
      <td colspan="2"><strong>Parroquia: </strong><?php echo e($query_pdf->parroquias_nombre); ?></td>
    </tr>
    <tr>
      <td colspan="1"><strong>Telefono:</strong><?php echo e($query_pdf->telefono); ?></td>
      <td colspan="2"><strong>Email:</strong><?php echo e($query_pdf->email); ?></td>
    </tr>
    <tr>
      <td colspan="1"><strong>Condicion Actual:</strong><?php echo e($query_pdf->actual); ?></td>
      <td colspan="2"><strong>Fecha de Creada:</strong><?php echo e($query_pdf->fecha_n); ?></td>
    </tr>
    <tr>
      <td colspan="1"><strong>Telefono de Representante:</strong><?php echo e($query_pdf->telefono_r); ?></td>
      <td colspan="2"><strong>Email de Representante:</strong><?php echo e($query_pdf->email_r); ?></td>
    </tr>
    <tr>
      <td colspan="3"><strong>Servicio:</strong><?php echo e($query_pdf->servicio); ?></td>
     
    </tr>
    <tr>
      <td colspan="1"><strong>Paredes de :</strong><?php echo e($query_pdf->paredes); ?></td>
      <td colspan="2"><strong>Techo de:</strong><?php echo e($query_pdf->techo); ?></td>
      <td colspan="3"><strong>Piso de:</strong><?php echo e($query_pdf->piso); ?></td>
    </tr>
    
    </table>
<?php endforeach; ?>
</body>
</html>