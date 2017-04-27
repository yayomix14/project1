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
<?php foreach($querys_pdf as $query_pdf): ?>
<br>
  <div><b>Fecha de Registro: </b><?php echo e($query_pdf->fecha); ?></div>
  <div><b>Codigo de Registro: </b><?php echo e($query_pdf->codigo); ?></div>
  <div><b>Nombre: </b><?php echo e($query_pdf->nombre); ?></div>
  <div><b>Nombre de Representante: </b><?php echo e($query_pdf->nombre_r); ?></div>
  <div><b>Rif: </b><?php echo e($query_pdf->rif); ?></div>
  <div><b>Disciplina: </b><?php echo e($query_pdf->diciplina); ?></div>
  <div><b>Categoria: </b><?php echo e($query_pdf->categoria); ?></div>
  <div><b>Objeto: </b><?php echo e($query_pdf->objeto); ?></div>
  <div><b>Direcciòn: </b><?php echo e($query_pdf->direccion); ?></div>
  <div><b>Municipio: </b><?php echo e($query_pdf->municipios_nombre); ?></div>
  <div><b>Parroquia: </b><?php echo e($query_pdf->parroquias_nombre); ?></div>
  <div><b>Telefono: </b><?php echo e($query_pdf->telefono); ?></div>
  <div><b>Email: </b><?php echo e($query_pdf->email); ?></div>
  <div><b>Datos de Registro Legal: </b><?php echo e($query_pdf->dato); ?></div>
  <div><b>Fecha de Fundada: </b><?php echo e($query_pdf->fundada); ?></div>
  <div><b>Condiciòn Actual: </b><?php echo e($query_pdf->condicion); ?></div>
  <div><b>Participante: </b><?php echo e($query_pdf->partcipante); ?></div>
  <div><b>Tiempo de Trayectoria: </b><?php echo e($query_pdf->trayectoria); ?></div>
  <?php endforeach; ?>
</body>
</html>