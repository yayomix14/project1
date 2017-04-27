<!DOCTYPE html>
<html>
<head>
  <title>Reporte3</title>
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
     <div><b style="font:100%;margin-left:-30px">Animación y Recreación del Estado Falcón</b></div>    
  </div>
</fieldset>
<br>
  <div><b>Nombre y Apellido: </b><?php echo e($querys_pdf->nombre); ?></div>
  <div><b>Fecha: </b><?php echo e($querys_pdf->fecha); ?></div>
  <div><b>Codigo de registro: </b><?php echo e($querys_pdf->codigo); ?></div>
  <div><b>Diciplina: </b><?php echo e($querys_pdf->diciplina); ?></div>
  <div><b>Desempeño: </b><?php echo e($querys_pdf->desempeño); ?></div>
  <div><b>Categoria: </b><?php echo e($querys_pdf->categoria); ?></div>
  <div><b>Cedula: </b><?php echo e($querys_pdf->cedula); ?></div>
  <div><b>Lugar de Nacimiento: </b><?php echo e($querys_pdf->lugar); ?></div>
  <div><b>Fecha de Nacimiento: </b><?php echo e($querys_pdf->fecha_n); ?></div>
  <div><b>Edad: </b><?php echo e($querys_pdf->edad); ?></div>
  <div><b>Direcciòn: </b><?php echo e($querys_pdf->direccion); ?></div>
  <div><b>Municipio: </b><?php echo e($querys_pdf->municipio); ?></div>
  <div><b>Parroquia: </b><?php echo e($querys_pdf->parroquia); ?></div>
  <div><b>Telefono: </b><?php echo e($querys_pdf->telefono); ?></div>
  <div><b>Email: </b><?php echo e($querys_pdf->email); ?></div>
  <div><b>Condiciòn Actual: </b><?php echo e($querys_pdf->condicion); ?></div>
  <div><b>Participante: </b><?php echo e($querys_pdf->partcipante); ?></div>
  <div><b>Tiempo de Trayectoria: </b><?php echo e($querys_pdf->trayectoria); ?></div>
  <div><b>Nombre de la Asociaciòn: </b><?php echo e($querys_pdf->asociacion); ?></div>
  <div><b>Especificaciòn de la Actividad que Realiza: </b><?php echo e($querys_pdf->actividad); ?> </div>
  
</body>
</html>