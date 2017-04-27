<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> <?php echo e("CORPOFALCÓN"); ?> - Gobernación Falcón</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <style>
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/iconos/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/theme.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/signin.css" rel="stylesheet">
    <link href="/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/css/daterangepicker.css" rel="stylesheet">
    <script src="/js/jquery-2.2.4.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/moment.min.js"></script>
    <script src="/js/es.js"></script>
    <script src="/js/readable-range.js"></script>
    <script src="/js/daterangepicker.js"></script>
    <script src="/js/modernizr.js"></script>
    <script src="/js/pregunta.js"></script>

<script type="text/javascript"> function fecha(){ var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"); var f=new Date(); document.write(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear()); }</script>


  </head>
  <body>
  <div class="container">
  <div class="text-left">
  <?php echo e(Html::image('img/gobierno.jpg', 'a picture', array('class' => 'thumb','heigth'=>"100", "width"=>'160'))); ?>

  <?php echo e(Html::image('img/admirable.jpg', 'a picture', array('style'=>'float: right;'))); ?>


  
</div>
</div>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
 <div class="container">
  <div class="text-left">


</div>
</div>
    <div class="container theme-showcase">
     <div class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        <?php if( Auth::check() ): ?>
            <a class="navbar-brand" href="">
                Bienvenid@ <?php echo e(ucfirst( Auth::user()->username )); ?>                                       
            </a>

          </div>
            <div class="navbar-brand pull-right">
              <script>fecha();</script>
            </div>
            
         <?php endif; ?>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
             
              <li class="dropdown">
                
                <ul class="dropdown-menu">
                  
                </ul>
              </li>
            </ul>
           <ul class="nav navbar-nav navbar-right">
              <li></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
 </div>
<?php if(auth()->check() ): ?>
  <div class="container">
  <div class="row">
  <div class="col-lg-3">
  <div class="well sidebar-nav">
              <ul class="nav nav-list">
              
                <li class=""><b>Menú Principal</b></li>
                  <li><a href="<?php echo e(route('index')); ?>"><i class='glyphicon glyphicon-home'></i> Inicio</a></li>
                  <li><a href="<?php echo e(action('AutenticacionController@logout')); ?>" onclick="return pregunta();"><i class='fa fa-sign-out'></i> Salir</a></li>
              <?php if(Auth::user()->tipo == 'admin'): ?>
                <li class=""><b>Menú Usuarios - Auditoria</b></li>
                  <li><a href="<?php echo e(action('UsuariosController@listar')); ?>"><i class='fa fa-users'></i> Listar Usuarios</a></li>
                  <li><a href="<?php echo e(action('UsuariosController@registrar')); ?>"><i class='fa fa-user-plus'></i> Registrar Usuarios</a></li>
                  <li><a href="<?php echo e(action('AuditoriaController@listar')); ?>"><i class='fa fa-list-ol'></i> Listar Registro</a></li>
                  <li><a href="<?php echo e(action('AuditoriaController@monitoreoIp')); ?>"><i class='fa fa-list-ol'></i> Desbloquear Ip</a></li>
              <?php endif; ?>

                
                <li class=""><b>Menú General</b></li>
                  <li><a href="<?php echo e(URL::to('general')); ?>"><i class='fa fa-bars'></i> General</a></li>
                  <li><a href="<?php echo e(URL::to('conexas')); ?>"><i class='fa fa-bars'></i> Act. Conexas</a></li>

                <li class=""><b>Mineral</b></li>
                  <li><a href="<?php echo e(URL::to('mineral')); ?>"><i class='fa fa-bomb'></i> Agr. Mineral</a></li> 


                <li class=""><b>Buscar por Coordenadas</b></li>
                  <li><a href="<?php echo e(URL::to('coordenadas')); ?>"><i class='fa fa-map-marker'></i> Buscar Coordenadas</a></li> 
                  <?php /* <li><a href="<?php echo e(URL::to('ubicarcoordenadas')); ?>"><i class='fa fa-map-marker'></i> Ubicar Coordenadas</a></li>  */ ?> 


                <li class=""><b>Reportes</b></li>
                  <li><a href="<?php echo e(URL::to('nombre')); ?>"><i class='glyphicon glyphicon-th-list'></i> Fecha</a></li>
                  <li><a href="<?php echo e(URL::to('vencer')); ?>"><i class='glyphicon glyphicon-th-list'></i> Prox. Vencer</a></li>
                  <li><a href="<?php echo e(URL::to('municipio')); ?>"><i class='glyphicon glyphicon-th-list'></i> Municipio</a></li>
                  <li><a href="<?php echo e(URL::to('mineralr')); ?>"><i class='glyphicon glyphicon-th-list'></i> Mineral</a></li>
                  <li><a href="<?php echo e(URL::to('modalidad')); ?>"><i class='glyphicon glyphicon-th-list'></i> Act. Conexas</a></li>
              
              </ul>
            </div><!--/.well -->
  </div>
<?php endif; ?>

    <div class="container" role="main" id="main">
    
      <?php echo $__env->yieldContent('content'); ?>
    
    </div> <!-- /container -->
    <div id="footer">
      <div class="container">
        <p class="text-muted credit"><b>
        <?php if( date('Y') == 2016 ): ?>
          <?php echo e('© 2016 '); ?>

        <?php elseif(date('Y') > 2016): ?>
          <?php echo e('© 2016 - '.date('Y')); ?> 
        <?php endif; ?>
        CORPOFALCÓN - Gobernación del Estado Falcón</b></p>
      </div>
    </div>
   

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->


  </body>
</html>
