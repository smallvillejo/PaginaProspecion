<?php
date_default_timezone_set('America/Bogota');
use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin</title>   
    <link href="PanelAdmin/css/bootstrap.min.css" rel="stylesheet">   
    <link href="PanelAdmin/css/sb-admin.css" rel="stylesheet">    
    <link href="PanelAdmin/css/plugins/morris.css" rel="stylesheet">
    <link href="PanelAdmin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="PanelUsuario/images/dollar.ico">
    <script src="PanelAdmin/js/jquery.js"></script>
</head>
<body>
    <div id="wrapper">       
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>           
            <ul class="nav navbar-right top-nav">               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo e(strtoupper(Auth::user()->nombre_usuario)); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">                      
                        <li>
                            <a href="<?php echo e(URL::route('Salir')); ?>"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>           
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo e(URL::route('Panel_Admin')); ?>"><i class="fa fa-fw fa-dashboard"></i> Menu Principal</a>
                    </li>                   
                </ul>
            </div>           
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">              
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            BIEVENIDO, <?php echo e(strtoupper(Auth::user()->nombre_usuario)); ?>

                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Inicio
                            </li>
                        </ol>
                    </div>
                </div>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>    
    <script src="PanelAdmin/js/bootstrap.min.js"></script>
</body>
</html>
