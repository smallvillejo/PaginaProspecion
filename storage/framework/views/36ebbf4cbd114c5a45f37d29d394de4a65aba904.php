<?php $__env->startSection('title'); ?>
Pasos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="Listado_Usuarios"></div>      

<!-- Modal -->
<div class="modal fade" id="Modal_Desactivar_Usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TitleModal"></h5>        
      </button>
    </div>
    <div class="modal-body" id="CuerpoMensaje">
      <label id="NombreUsuario"></label>
      <input type="hidden" name="ID_Usuario" id="ID_Usuario">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary DesactivarUsuario" style="display: none;">SI</button>
      <button type="button" class="btn btn-primary ActivarUsuario" style="display: none;" >SI</button>

      <button type="button" class="btn btn-secondary Cancelar" data-dismiss="modal" style="display: none">NO</button>
      <button type="button" class="btn btn-secondary Salir" data-dismiss="modal" style="display: none">SALIR</button>
    </div>
  </div>
</div>
</div>



<script type="text/javascript">


  $('body').delegate('.ListarUsuariosVideo1','click',function(){
   var variable=1;
   Cargar_Tabla_Usuarios_Videos(variable);
 });
  $('body').delegate('.ListarUsuariosVideo2','click',function(){
    var variable=2;
    Cargar_Tabla_Usuarios_Videos(variable);
  });
  $('body').delegate('.ListarUsuariosVideo3','click',function(){
   var variable=3;
   Cargar_Tabla_Usuarios_Videos(variable);
 });
  $('body').delegate('.ListarUsuariosVideo4','click',function(){
   var variable=4;
   Cargar_Tabla_Usuarios_Videos(variable);
 });
  $('body').delegate('.ListarUsuariosVideo5','click',function(){

   Cargar_Tabla();
 });
  $('body').delegate('.ListarUsuariosTotalRegistrados','click',function(){

   Cargar_Listado_De_Usuarios_Registrados();
 });



  $('body').delegate('.Desactivar_Usuario','click',function(){         
    var ID_Usuario =($(this).attr('ID_Usuario'));
    var Nombre_Usuario =($(this).attr('Nombre_Usuario'));    
    Nombre_Usuario = Nombre_Usuario.toUpperCase();
    $('#TitleModal').text('Esperando Confirmación...');
    $(".Cancelar").show(); 
    $(".DesactivarUsuario").show();    
    $(".Salir").hide();  
    $(".ActivarUsuario").hide();
    
    

    $("#NombreUsuario").css("fontSize", 15);            
    $("#NombreUsuario").css("font-weight","Bold"); 
    $("#NombreUsuario").css("color","#A52A2A");
    $('#NombreUsuario').html('<center>Esta Seguro de desactivar el Usuario:<br>***'+ Nombre_Usuario+' ***</center>'); 
    $('#ID_Usuario').val(ID_Usuario);
    $('#Modal_Desactivar_Usuario').modal('show');   
  });

  $('.DesactivarUsuario').click(function(){
    var ID_Usuario=$('#ID_Usuario').val();
    $.ajax({
      type:'GET',
      data:{
        'ID_Usuario':ID_Usuario
      },    
      url:'<?php echo e(url('Desactivar_Usuario')); ?>',
      success: function(data){      
        if(data==0){        
          $('#Modal_Desactivar_Usuario').modal('show');
          $('#TitleModal').text('Esperando Confirmación...');  
          $('#NombreUsuario').html('El usuario fue desactivado con exito.');         
          $(".Salir").show(); 
          $(".Cancelar").hide();           
          $(".DesactivarUsuario").hide();         
        }
      }
    });
  });

  $('body').delegate('.Activar_Usuario','click',function(){         
    var ID_Usuario =($(this).attr('ID_Usuario'));
    var Nombre_Usuario =($(this).attr('Nombre_Usuario'));    
    Nombre_Usuario = Nombre_Usuario.toUpperCase();
    $('#TitleModal').text('Esperando Confirmación...');
    $(".Cancelar").show(); 
    $(".DesactivarUsuario").hide();         
    $(".Salir").hide();
    $(".ActivarUsuario").show(); 

    $("#NombreUsuario").css("fontSize", 15);            
    $("#NombreUsuario").css("font-weight","Bold"); 
    $("#NombreUsuario").css("color","#A52A2A");
    $('#NombreUsuario').html('<center>Esta Seguro de Activar el Usuario:<br>***'+ Nombre_Usuario+' ***</center>'); 
    $('#ID_Usuario').val(ID_Usuario);
    $('#Modal_Desactivar_Usuario').modal('show');   
  });

  $('.ActivarUsuario').click(function(){
    var ID_Usuario=$('#ID_Usuario').val();
    $.ajax({
      type:'GET',
      data:{
        'ID_Usuario':ID_Usuario
      },    
      url:'<?php echo e(url('Activar_Usuario')); ?>',
      success: function(data){      
        if(data==0){        
          $('#Modal_Desactivar_Usuario').modal('show');
          $('#TitleModal').text('Esperando Confirmación...');  
          $('#NombreUsuario').html('El usuario fue Activado con exito.');         
          $(".Salir").show(); 
          $(".Cancelar").hide();           
          $(".DesactivarUsuario").hide();
          $(".ActivarUsuario").hide();           
        }
      }
    });
  });

  $(".Salir").click(function(){
    location.reload();    
  });



  Cargar_Tabla();
  function Cargar_Tabla(){
    var _token=$('#_token').val();
    $.ajax({
      type:'GET',      
      url:'<?php echo e(url('Listar_Usuarios_Registrados')); ?>',
      success: function(data){      
        $('#Listado_Usuarios').empty().html(data);
      }
    });

    $(document).on("click",".pagination li a",function(e) {
      e.preventDefault();   
      var url = $(this).attr("href");
      $.ajax({
        type:'get',
        url:url,      
        success: function(data){
          $('#Listado_Usuarios').empty().html(data);        
        }
      });
    });   
  }


  function Cargar_Tabla_Usuarios_Videos(variable){
    var _token=$('#_token').val();
    $.ajax({
      type:'GET',
      data:{
        'variable':variable
      },   
      url:'<?php echo e(url('Listar_Usuarios_X_Video')); ?>',
      success: function(data){      
        $('#Listado_Usuarios').empty().html(data);
      }
    });

    $(document).on("click",".pagination li a",function(e) {
      e.preventDefault();   
      var url = $(this).attr("href");
      $.ajax({
        type:'get',
        url:url,      
        success: function(data){
          $('#Listado_Usuarios').empty().html(data);        
        }
      });
    });   
  }


  function Cargar_Listado_De_Usuarios_Registrados(){
    var _token=$('#_token').val();
    $.ajax({
      type:'GET',         
      url:'<?php echo e(url('Listar_Total_Usuarios_Registrados')); ?>',
      success: function(data){      
        $('#Listado_Usuarios').empty().html(data);
      }
    });
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Master_Blade_Admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>