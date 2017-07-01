<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
	<title>Ganar dinero desde casa</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Equipo TeamWorking">  
	<meta name="url" content="http://www.ganardesdecasa.co">
	<meta name="copyright" content="Home">
	<meta name="robots" content="index,follow"> 
	<meta property="fb:app_id" content="1233681736730792"/>
	<meta name="description" content="Este el sistema de publicidad más novedoso en Colombia. Con las características de los sistemas de PTC brindamos un sólido sistema sin riesgo donde los colombianos ganan dinero desde la comodidad de su hogar"/>  
	<meta property="og:description" 
	content="Este el sistema de publicidad más novedoso en Colombia. Con las características de los sistemas de PTC brindamos un sólido sistema sin riesgo donde los colombianos ganan dinero desde la comodidad de su hogar" />
	<meta property="og:url" content="http://www.ganardesdecasa.co" />
	<meta property="og:title" content="Como puedo ganar dinero por internet y desde casa?">
	<meta property="og:site_name" content="Como puedo ganar dinero por internet y desde casa?">  
	<meta property="og:image" content="http://www.ganardesdecasa.co/PanelAdmin/images/LogoPaginaEnlace.png">
	<meta property="og:image:width" content="640">
	<meta property="og:image:height" content="300">
	<link rel="stylesheet" type="text/css" media="all" href="PanelUsuario/css/screen.css" />
	<link rel="stylesheet" type="text/css" media="all" href="PanelUsuario/css/color_p.css" />
	<link rel="stylesheet" type="text/css" media="all" href="PanelUsuario/css/global_p.css" />
	<link rel="stylesheet" type="text/css" media="all" href="PanelUsuario/css/local_p.css" />
	<link rel="icon" type="image/png" href="PanelUsuario/images/dollar.ico">
	<link href="PanelUsuario/css/bootstrap.min.css" rel="stylesheet">  
	<link rel="stylesheet" href="PanelUsuario/css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="PanelUsuario/css/EstiloPagina.css">   
	<meta name="viewport" content="width=device-width" /> 
	<script type="text/javascript" src="PanelUsuario/js/jquery.min.js"></script>    
</head>
<body>
	<header id="header" class="wide-container">
		<div class="wrap-container" style="margin-top:12px;">
			<div class="contenedor-logo-superior">
				<img src="PanelUsuario/imagenes/ganardesdecasablanco.png" class="img-logo-resp" height="35"><br>
				<?php if(Auth::check()): ?>
				<center>
					<font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">Bienvenido</font> 
					<font size ="4", color ="#00bd70" face="Calibri (Cuerpo)">
						<?php if($registro_video=Auth::user()->registro_video!=4): ?>
						<?php echo e(strtoupper(Auth::user()->nombre_usuario)); ?>,
						<?php else: ?>
						<?php echo e(strtoupper(Auth::user()->nombre_usuario)); ?>

						<?php endif; ?>
					</font> 
					<font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">
						<?php if($registro_video=Auth::user()->registro_video!=4): ?>
						a como ganar dinero desde casa   
						<?php endif; ?>
					</font> 
				</center> 
				<?php endif; ?>  
			</div>
			<div class="contenedor-superior-login">
				<div id="menu" class="">          
				</div>
				<?php if(Auth::check()): ?>
				<a class="LogueoUsuario myButton fondo-btn-form hvr-bounce-to-right" href="<?php echo e(URL::route('Salir')); ?>">
					SALIR
				</a>       
				<?php else: ?>
				<a class="LogueoUsuario myButton fondo-btn-form hvr-bounce-to-right" data-toggle="modal" data-target="#myModal" href="#" data-modal="modal-7">
					ACCEDER
				</a>       
				<?php endif; ?> 
			</div>
		</div>
	</header>
	<header class="main-header show-menu-lat">
		<a class="logo" href="javascript:void(0);">
			<?php if(Auth::check()): ?>
			<font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">Bienvenido</font> 
			<font size ="4", color ="#00bd70" face="Calibri (Cuerpo)">
				<?php echo e(strtoupper(Auth::user()->nombre_usuario)); ?>,
			</font> 
			<font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">
				a como ganar dinero desde casa   
			</font>
			<?php else: ?>
			<font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">Bienvenido</font> 
			<font size ="4", color ="#00bd70" face="Calibri (Cuerpo)">
				Te enseñeare a como ganar dinero desde casa
			</font> 
			<font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">      
			</font>
			<?php endif; ?>
		</a>
		<nav class="navbar navbar-static-top">
			<a role="button" data-toggle="offcanvas" id="sidebarBtn" class="sidebar-toggle" href="javascript:void(0);">
			</a>
			<div class="navbar-custom-menu">        
			</div>
		</nav>
	</header>
	<aside class="main-sidebar">
		<section class="sidebar" style="height: auto;">
			<ul class="sidebar-menu" style="margin-top:20px;">
				<li class="active" id="support-link">
					<a href="<?php echo e(URL::route('Salir')); ?>">
						<span>Cerrar Sesión</span>
					</a>
				</li>       
			</ul>
		</section>
	</aside>
	<script>
		$("ul.sidebar-menu li.disabled a").click(function(event){

		});
	</script>
	<script>
		$('#sidebarBtn').click(function () {
			$('body').toggleClass('sidebar-collapse');
		});
		dropdown = $('.dropdown'); 
		dropdown.click(function () {
			dropdown.not(this).removeClass('show');
			$(this).toggleClass('show');
		});
		$('html').click(function() {
			dropdown.removeClass('show');
			$('body').removeClass('sidebar-collapse');
		});  
		dropdown.click(function(event){
			event.stopPropagation();
		});
		$('#sidebarBtn, .main-sidebar').click(function(event){
			event.stopPropagation();
		});		
	</script>   
	<main id="main">
		<!-- SECCION UNO -->
		<section id="registro" style="padding-top: 115px;background:#244a61;">
			<?php echo $__env->yieldContent('content'); ?>
			
		</section>
		<div class="clear"></div>
		<?php if($Usuario_Logueado=Auth::user()->rol_usuario==2): ?>
		<?php if($registro_video=Auth::user()->registro_video!=4): ?>
		<article class="containers-landing txt-center agregar-clase-100 quitar-item-test" style="margin-top:30px;">
			<!-- <h4>Total Visitas: <font size ="5", color ="#1abc9c"><label id="ID_contador_Visitas"></label></font> </h4> -->
			<div class="div-de-logos">
				<div class="bloque-grande-logos">
					<div class="contenedor-small-logos" style="margin-top: 60px;">
						<div class="div-que-estas-esperando">
							<p class="texto-que">¡Que</p>
							<p class="texto-estas">estás </p>
							<p class="texto-esperando">esperando!</p>
						</div>
						<div class="pull-right">
							
						</div>
						<!-- <a class="estilo-btn-logos hvr-bounce-to-right" href="http://cli.ckea.me/?ref=villejo">REGISTRARME AHORA</a> --> </div>
						<div style="width: 70%; float: right; border-left: 1px solid #b3b3b3;">
							<h1 style="color:#5a5a5a;"><span style="font-size:22px;">RETIRA TU DINERO GANADO EN</span> <span style="font-size:24px;font-weight:700;">
								PESOS Colombianos                    </span></h1>
								<div class="contenedor-ext-logos"> 
									<img src="PanelUsuario/images/Bancos/Davivienda.png"> 
									<img src="PanelUsuario/images/Bancos/Colpatria.png"> 
									<img src="PanelUsuario/images/Bancos/BanColombia.png" style="top:-4px;position:relative;">             
								</div>            
							</div>
						</div>
					</div>
				</article>
				<?php endif; ?>
				<?php endif; ?>
				<article class="containers-landing txt-center agregar-clase-100 quitar-item-test" style="margin-top:300px;" >
					<div class="pull-right">						
					</div>
					<div style="width:100%;height:1px;border-top:1px solid #b3b3b3"></div>
				</article>    
			</section>
			<footer style="background:#0f2634;height:200px;width:100%;">
				<article class="containers-landing blue txt-center agregar-clase-100">
					<div style="width:50%;padding-top:45px;">					
						<p style="color:#fff;font-size:15px;text-align:center;font-weight:300;">						
							Sitio diseñado por <a href="www.ganardesdecasa.co">www.ganardesdecasa.co</a><br>
							<span style="font-weight:bold;">Copyright© 2017. Todos los derechos reservados. 
							</span> 							
						</p>						
					</div>
				</article>
			</footer>
			<footer style="" class="mostrar-footer clase-footer-dos">
				<article class="containers-landing blue txt-center agregar-clase-100">
					<div style="width: 50%; padding-top: 13px; margin: 0px auto;">        
					</div>
				</article>
			</footer>   
		</main>
		<script>
				// document.oncontextmenu = function(){
				// 	return false;
				// }
			</script>
			<script type="text/javascript">
				ContadorVisitas();


				function ContadorVisitas(){			
					$.ajax({
						type:'get',			
						url:'<?php echo e(url('ContadorVisitas')); ?>',
						success: function(data){ 
							$('#ID_contador_Visitas').text(data.TotalVisitas);

					// $('#id_grafica').empty().html(data);	
				}         
			});
				}
			</script>


			<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>  
			<script type="text/javascript" src="PanelUsuario/js/bootstrap.min.js"></script>  
		</body>
		</html>