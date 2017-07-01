<?php $__env->startSection('title'); ?>
Pasos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading"></div>
		<div class="panel-body">
		<center><h2>Próximamente aquí estarán los videos tutoriales que tendrás de forma gratis por estar en nuestro equipo.</h2></center>
			<img src="PanelUsuario/imagenes/sitio.jpg" width="500" class="img-thumbnail img-responsive col-md-offset-4" alt="">
		</div>
	</div>

</div>

<script type="text/javascript">
	var UsuarioLogueado="<?php echo e($registro_video=Auth::user()->registro_video); ?>";

	if(UsuarioLogueado!=4){
		console.log(UsuarioLogueado);
		window.location.href = "<?php echo e(URL::route('VideoPasos')); ?>";
	}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Master_Blade_Usuario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>