<?php
date_default_timezone_set('America/Bogota');
use Carbon\Carbon;
?>

<?php if($TotalUsuariosRegistradosActivados->total()==0): ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<img src="PanelUsuario/images/NoDataFound.jpg" alt="logo" class="img-thumbnail img-responsive" >	
</div>
<?php else: ?>
<div class="row">
	<div class="col-lg-6 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-user-o fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge"><?php echo e($TotalUsuariosActivados); ?></div>
						<div>Usuarios Activos</div>
					</div>
				</div>
			</div>			
			<div class="panel-footer">
				<a href="#" class="ListarUsuariosTotalRegistrados">
					<span class="pull-left">Total Usuarios Registrados (<?php echo e($TotalUsuariosRegistrados); ?>)</span>
				</a>
				<div class="pull-right"> 
					<span class="pull-right"> 
						Exportar Excel
						<a href="<?php echo e(URL::route('Exportar_Excel')); ?>" title="Descargar Excel">
							<img src="PanelAdmin/images/excel.png" height="20px" width="20px">
						</a>
					</span>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-video-camera fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge"><?php echo e($TotalUsuariosEnVideo4); ?></div>
						<div>Total Videos</div>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer">
					<span class="pull-left">Total Usuarios en el 4 Video</span>
					<span class="pull-right"><?php echo e($TotalUsuariosEnVideo4); ?></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>                    
</div>   
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
	<a href="#" class="ListarUsuariosVideo1">
		<span class="btn btn-success">
			<i class="fa fa-search" aria-hidden="true"></i>
			Buscar Usuarios en Video 1
		</span>							
	</a>
	<a href="#" class="ListarUsuariosVideo2">
		<span class="btn btn-danger">
			<i class="fa fa-search" aria-hidden="true"></i>
			Buscar Usuarios en Video 2
		</span>							
	</a>
	<a href="#" class="ListarUsuariosVideo3">
		<span class="btn btn-warning">
			<i class="fa fa-search" aria-hidden="true"></i>
			Buscar Usuarios en Video 3
		</span>							
	</a>
	<a href="#" class="ListarUsuariosVideo4">
		<span class="btn btn-info">
			<i class="fa fa-search" aria-hidden="true"></i>
			Buscar Usuarios en Video 4
		</span>							
	</a>
	<a href="#" class="ListarUsuariosVideo5">
		<span class="btn btn-danger">
			<i class="fa fa-times" aria-hidden="true"></i>
			CANCELAR
		</span>							
	</a>
	<br><br><br>			
	<div class="row">                 
		<div class="col-lg-12">			
			<div class="table-responsive">
				<div class="panel panel-default">				
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-user-circle-o"></i> Listado de Usuarios Registrados</h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>									
										<th>Nombre Usuario</th>
										<th>Email</th>
										<th>WhatsApp</th>
										<th># Video</th>
										<th>Creación Cuenta</th>
										<th>Última Conexión</th>
										<th>Estado</th>
										<th>Opciones</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($TotalUsuariosRegistradosActivados as $value): ?>	
									<tr>
										<td>									
											<?php echo e($value->nombre_usuario); ?>	
										</td>	
										<td>
											<?php echo e($value->correo_usuario); ?>						
										</td>
										<td>
											<?php echo e($rest = substr($value->whats_usuario ,0, 3)."-".substr($value->whats_usuario ,3, 3)."-".substr($value->whats_usuario ,6, 4)); ?> 	

										</td>
										<td>
											<?php if($value->registro_video==4): ?>					
											<span class="btn btn-success">
												<?php echo e($value->registro_video); ?>

											</span>
											<?php else: ?>
											<?php if($value->registro_video==3): ?>					
											<span class="btn btn-warning">
												<?php echo e($value->registro_video); ?>

											</span>
											<?php else: ?>
											<?php if($value->registro_video==2): ?>					
											<span class="btn btn-danger">
												<?php echo e($value->registro_video); ?>

											</span>
											<?php else: ?>											
											<span class="btn btn-info">
												<?php echo e($value->registro_video); ?>

											</span>
											<?php endif; ?>
											<?php endif; ?>
											<?php endif; ?>											
										</td>
										<td>
											<?php echo e(Carbon::parse($value->fecha_registro)->diffForHumans()); ?>

											<!-- (<?php echo e(Carbon::parse($value->fecha_registro)->toDateString()); ?>)	 -->	

										</td>
										<td>
											<?php echo e(Carbon::parse($value->ultima_conexion)->diffForHumans()); ?>

											<!-- (<?php echo e(Carbon::parse($value->ultima_conexion)->toDateString()); ?>) -->		

										</td>
										<td>	
											<?php if($value->estado_usuario=='Activo'): ?>		
											<a href="#">
												<span class="btn btn-success" title="Usuario Activo">
													<i class="fa fa-thumbs-up" aria-hidden="true"></i>
													Activo
												</span>		
											</a>					
											<?php else: ?>
											<a href="#">
												<span class="btn btn-danger" title="Usuario Inactivo">
													<i class="fa fa-thumbs-down" aria-hidden="true"></i> 
													Inactivo
												</span>							
											</a>
											<?php endif; ?>
										</td>
										<td>
											<?php if($value->estado_usuario=='Activo'): ?>
											<a href="#" class="Desactivar_Usuario" ID_Usuario="<?php echo e($value->id); ?>" Nombre_Usuario="<?php echo e($value->nombre_usuario); ?>">
												<span class="btn btn-danger" title="Desactivar Usuario">					
													<i class="fa fa-ban" aria-hidden="true"></i> 
													Desactivar
												</span>							
											</a>
											<?php else: ?>
											<a href="#" class="Activar_Usuario" ID_Usuario="<?php echo e($value->id); ?>" Nombre_Usuario="<?php echo e($value->nombre_usuario); ?>">
												<span class="btn btn-warning" title="Activar Usuario">
													<i class="fa fa-check-circle" aria-hidden="true"></i>
													Activar
												</span>							
											</a>
											<?php endif; ?>		
										</td>													
									</tr>
									<?php endforeach; ?>													
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<center><?php echo e($TotalUsuariosRegistradosActivados->links()); ?></center>	
			</div>
			<div class="panel-footer">Total Registros: <?php echo e($TotalUsuariosRegistradosActivados->total()); ?></div>
		</div>
	</div>
	<?php endif; ?>