<?php $__env->startSection('title'); ?>
Pasos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<input type="hidden" name="UsuarioVideoRegistrado" id="UsuarioVideoRegistrado">
<article class="seccion-review" style="padding-left: 5px; padding-right: 5px;">
  <div style="width:70%;float:left;" class="ocultar-titulos-superiores">
    <font size ="5", color ="#ffffff" face="Calibri (Cuerpo)"> 
      MIRA ESTOS 4 INCREÍBLES VIDEOS Y TE ENSEÑO A GANAR DESDE CASA MÁS DE
    </font>
    <strong><font size ="6", color ="#00bd70" face="Calibri (Cuerpo)"> $680.000</font></strong>
    <font size ="5", color ="#ffffff" face="Calibri (Cuerpo)">
      MENSUALES
    </font>
  </div>        
  <div style="display:block; clear:both"></div> 
  <div style="width:100%;float:left;padding-left: 20px; padding-right: 20px;height:30px;" class="mostrar-titulos-superiores">
   <font size ="5", color ="#ffffff" face="Calibri (Cuerpo)"> 
    MIRA ESTOS 4 INCREÍBLES VIDEOS Y TE ENSEÑO A GANAR DESDE CASA MÁS DE
  </font>
  <strong><font size ="6", color ="#00bd70" face="Calibri (Cuerpo)"> $680.000</font></strong>
  <font size ="5", color ="#ffffff" face="Calibri (Cuerpo)">
    MENSUALES
  </font>
</div>
<div style="width: 60%; float: right; text-align: left;height:41px;padding-left:5px;" class="mostrar-titulos-superiores">
  <!-- <h1 class="titulo-sup">
    <span class="tit-desde">DESDE 
      <span class="tit-colombia">Colombia</span>
    </span>
  </h1> -->
</div>      
<div id="form-container" class="rg contenedor-form-superior" style="float:right;margin-top:30px;">
  <div class="formSignup">
    <div style="width:100%;height:90px;background:#173546;text-align:center;padding-top:12px;margin-bottom:15px;" class="quitar-info-form">
      <span style="font-size:20px;color:#ffffff;position: relative; top: 20px;">
        PRIMEROS PASOS  
      </span>         
    </div>      
    <button class="EstiloBotonRedondo EstiloCheck pull-left" id="BtnVideo1" style="padding:1px;">
    </button> 
    <font size ="3", color ="#ffffff" face="Calibri (Cuerpo)" style="padding:10px;  position: relative; top: 8px;">
      OPORTUNIDAD
    </font>
    <br><br><br>
    <button class="EstiloBotonRedondo EstiloCheck pull-left" id="BtnVideo2" style="padding:1px;">
    </button> 
    <font size ="3", color ="#ffffff" face="Calibri (Cuerpo)" style="padding:10px;  position: relative; top: 8px;">
     PRESENTACIÓN
   </font>
   <br><br><br>
   <button class="EstiloBotonRedondo EstiloCheck pull-left" id="BtnVideo3" style="padding:1px;">
   </button> 
   <font size ="3", color ="#ffffff" face="Calibri (Cuerpo)" style="padding:10px;  position: relative; top: 8px;">
    ¿COMO DUPLICARSE?
  </font>
  <br><br><br>
  <button class="EstiloBotonRedondo EstiloCheck pull-left" id="BtnVideo4" style="padding:1px;">
  </button> 
  <font size ="3", color ="#ffffff" face="Calibri (Cuerpo)" style="padding:10px;  position: relative; top: 8px;">
   SORPRESA :)
 </font>   
 <br><br><br>
 <center>
   <a href="" class="button radius vdo_arrow SiguienteEtapa" id="SiguienteEtapa" style="display: none;">
     <font size ="2", color ="#ffffff" face="Calibri (Cuerpo)">
       IR A LA SIGUIENTE ETAPA
     </font>
   </a>
   <a href="#" class="button radius vdo_arrow2 MinicursoEnviar" id="MinicursoEnviar" style="display: none;">
     <font size ="2", color ="#ffffff" face="Calibri (Cuerpo)">
       ENVIARME MINICURSO !!
     </font>
   </a>                                
 </center>   
</div>
<div style="display: none">
  <div id="progress">
    <div id="bar"></div>
  </div>
  <div id="info">
  </div>
</div>
</div>
<div class="div-item-review quitar-info-video" style="float:left;margin-top:30px;">
  <div class="video-container video-container-res">
    <video class="video" autoplay="true" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
      <source id="Id_Video" type="video/mp4">
      </video>
      <div class="playpause"></div> 
      <div class="container-vid"></div>
    </div>
    <div class="clear"></div>
    <div class="panel panel-default" id="estilo_mensaje" style="display: none;">
      <div class="panel-heading" id="id_validacion" style="display: none;" >
      </div>
    </div>
    <center><a class="estilo-btn-logos hvr-bounce-to-right RegistroClickeame" href="http://cli.ckea.me/?ref=villejo" style="display: none;">REGISTRARME AHORA</a> </center>
  </div>
</article>





<script type="text/javascript">
 Consultar_Video_Guardado_Usuario();
 $('#video1').click(function(){
  Consultar_Video_Guardado_Usuario();
});

 VerificarVideoActual();
 function VerificarVideoActual(VideoActualUsuario){

  if(VideoActualUsuario==1){
   $("#BtnVideo1").attr("class", "EstiloBotonRedondo EstiloCheck pull-left");
   $("#BtnVideo2").attr("class", "EstiloBotonRedondo EstiloSinCheck pull-left");
   $("#BtnVideo3").attr("class", "EstiloBotonRedondo EstiloSinCheck pull-left");
   $("#BtnVideo4").attr("class", "EstiloBotonRedondo EstiloSinCheck pull-left");
   $(".RegistroClickeame").hide();

 }else{
   if(VideoActualUsuario==2){
    toggle_color("#61beb3", "#90a2c6", 300, 300);
    $("#BtnVideo1").attr("class", "EstiloBotonRedondo EstiloCheck pull-left");
    $("#BtnVideo2").attr("class", "EstiloBotonRedondo EstiloCheck pull-left");
    $("#BtnVideo3").attr("class", "EstiloBotonRedondo EstiloSinCheck pull-left");
    $("#BtnVideo4").attr("class", "EstiloBotonRedondo EstiloSinCheck pull-left");
    $(".RegistroClickeame").show();
  }else{
    if(VideoActualUsuario==3){
     $("#BtnVideo1").attr("class", "EstiloBotonRedondo EstiloCheck pull-left");
     $("#BtnVideo2").attr("class", "EstiloBotonRedondo EstiloCheck pull-left");
     $("#BtnVideo3").attr("class", "EstiloBotonRedondo EstiloCheck pull-left");
     $("#BtnVideo4").attr("class", "EstiloBotonRedondo EstiloSinCheck pull-left");
     $(".RegistroClickeame").show();
   }else{
    if(VideoActualUsuario==4){
     $("#BtnVideo1").attr("class", "EstiloBotonRedondo EstiloCheck pull-left");
     $("#BtnVideo2").attr("class", "EstiloBotonRedondo EstiloCheck pull-left");
     $("#BtnVideo3").attr("class", "EstiloBotonRedondo EstiloCheck pull-left");
     $("#BtnVideo4").attr("class", "EstiloBotonRedondo EstiloCheck pull-left");
     $(".RegistroClickeame").show();
   }
 }
}
}
}



$(document).ready(function()
{
 // $(".RegistroClickeame").css("background-color",color1);
 
 setTimeout(function () {}, wait_time);
 function toggle_color(color1,color2,cycle_time,wait_time) {
  setInterval(function first_color() {
    $(".RegistroClickeame").css({
      backgroundColor: color1
    }, 1000, function () {
      setTimeout(change_color, wait_time);
    });
  }, cycle_time);

  function change_color() {
    $(".RegistroClickeame").css({
      backgroundColor: color2
    }, 1000, function () {
      setTimeout(function () {}, wait_time);
    });
  }
}

toggle_color('#61beb3','#7d4b68',8000,3000);
});





function toggle_color(color1, color2, cycle_time, wait_time) {

  setInterval(function first_color() {

    $(".RegistroClickeame").css("background-color",color1);

    setTimeout(change_color, wait_time);
  }, cycle_time);

  function change_color() {
    $(".RegistroClickeame").css("background-color",color2);

  }
} 

function Consultar_Video_Guardado_Usuario(){
  $.ajax({
   type:'get',     
   url:'<?php echo e(url('Consultar_Video_Guardado_Usuario')); ?>',    
   success: function(data){ 
    $('#UsuarioVideoRegistrado').val(data);
    var UsuarioVideo=$('#UsuarioVideoRegistrado').val();
    var videoFile = 'PanelUsuario/video/video'+UsuarioVideo+'.mp4';            
    $('#Id_Video').attr('src', videoFile);

    $(".video")[0].load();
            // var variable="timer"+UsuarioVideo;         
            if(data==1){
              timer1.start();
              timer2.pause();
              timer3.pause();
            }else{
              if(data==2){
                timer2.start();
                timer1.pause();
                timer3.pause();
              }else{
                if(data==3){
                  timer3.start();
                  timer1.pause();
                  timer2.pause();
                }else{
                  if(data==4){
                    timer4.start();
                    timer1.pause();
                    timer2.pause(); 
                    timer3.pause();   
                  }
                }
              }
            }           
            $(".playpause").fadeOut();

            VerificarVideoActual(UsuarioVideo);
          }         
        });
} 



$('.video').parent().click(function () {        
  var NumeroVideoUsuarioRegistrado=$('#UsuarioVideoRegistrado').val();
  if($(this).children(".video").get(0).paused){
    $(this).children(".video").get(0).play();
    $(this).children(".playpause").fadeOut();         
    if(NumeroVideoUsuarioRegistrado==1){
      timer1.start();
      timer2.pause();
      timer3.pause(); 
      timer4.pause();             
    }else{
      if(NumeroVideoUsuarioRegistrado==2){
       timer2.start();
       timer1.pause();
       timer3.pause();  
       timer4.pause();                
     }else{
       if(NumeroVideoUsuarioRegistrado==3){
        timer3.start();
        timer1.pause();
        timer2.pause(); 
        timer4.pause();                 
      }else{
        if(NumeroVideoUsuarioRegistrado==4){
          timer4.start();
          timer1.pause(); 
          timer2.pause();
          timer3.pause(); 
        }
      }
    }
  }
}else{          
 $(this).children(".video").get(0).pause();
 $(this).children(".playpause").fadeIn();
 if(NumeroVideoUsuarioRegistrado==1){           
  timer1.pause();
  timer2.pause();
  timer3.pause();
}else{
  if(NumeroVideoUsuarioRegistrado==2){              
   timer1.pause();
   timer2.pause();
   timer3.pause();
 }else{
   if(NumeroVideoUsuarioRegistrado==3){             
    timer1.pause();
    timer2.pause();
    timer3.pause();
  }else{
    if(NumeroVideoUsuarioRegistrado==4){             
      timer1.pause();
      timer2.pause();
      timer3.pause();
      timer4.pause();
    }
  }

}
}
}
});

var Timer = function(cb, delay) {
  this.cb = cb;
  this.delay = delay;
  this.elapsed = 0;
  this.remaining = this.delay - self.elapsed;
};

var bar = document.getElementById('bar');
var info = document.getElementById('info');
var percent;

Timer.prototype = function() {
  var _start = function(x, y) {
    var self = this;
    if (self.elapsed < self.delay) {
      clearInterval(self.interval);
      self.interval = setInterval(function() {
        self.elapsed += 0.4;
        self.remaining = self.delay - self.elapsed;
        percent = Math.round(self.elapsed/self.delay * 100);
        bar.style.width = percent + '%';

        info.innerHTML = 'elapsed: ' + self.elapsed +  
        '<br />remaining: ' + self.remaining +
        '<br />delay: ' + self.delay +
        '<br />percent: ' + percent + '%';

        if (self.elapsed >= self.delay) {
          clearInterval(self.interval);
          self.cb();
        }
      }, 50);
    }
  },
  _pause = function() {
    var self = this;
    clearInterval(self.interval);
  },
  _restart = function() {
    var self = this;
    self.elapsed = 0;
    clearInterval(self.interval);
    self.start();
  };

  //public member definitions
  return {
    start: _start,
    pause: _pause,
    restart: _restart
  };
}();


// var timer5 = new Timer(function() {
//  info.innerHTML += '';
//   // alert('ACABO');
//   // window.setTimeout(function(){document.getElementById('btnRegistroCliente').disabled=false;},150);
// }, 1360);

// }, 1360);

var timer1 = new Timer(function() {
  info.innerHTML += '';

  $('.SiguienteEtapa').show(1000);

}, 1);

var timer2 = new Timer(function() {
  info.innerHTML += '';

  $('.SiguienteEtapa').show(1000);

},5420);

var timer3 = new Timer(function() {
  info.innerHTML += '';

  $('.SiguienteEtapa').show(1000);

  $("#SiguienteEtapa").css("fontSize", 15);            
  $("#SiguienteEtapa").css("font-weight","Bold");  

  document.getElementById("SiguienteEtapa").innerHTML="CARGAR SORPRESA !!";

}, 1500);

var timer4 = new Timer(function() {
  info.innerHTML += '';

  $('.MinicursoEnviar').show(1000);

}, 1590);

// timer.start();



$('#restart').click(function(){
  timer.restart();
});

$('.SiguienteEtapa').click(function(){

	var VideoActual=$('#UsuarioVideoRegistrado').val();
	var SiguienteVideo;

	if(VideoActual==1){
		SiguienteVideo=2;
	}else{
		if(VideoActual==2){
			SiguienteVideo=3;
		}else{
			if(VideoActual==3){
				SiguienteVideo=4;
			}
		}
	}
	$.ajax({
		type:'get',     
		url:'<?php echo e(url('ActualizarVideoVisto')); ?>',
		data:{
			'SiguienteVideo': SiguienteVideo
		},
		success: function(data){ 
			if(data==0){
				Consultar_Video_Guardado_Usuario();
			}
		}

	});
});


var arriba;
function bajar() {
	$('html, body').animate({scrollTop:0}, 'slow');
}

$('#MinicursoEnviar').click(function(){ 
  $.ajax({
    type:'get',     
    url:'<?php echo e(url('EnviarCorreo')); ?>',    
    complete: function(data) {
     if(data.status==200){
      $('#id_validacion').html('');
      $('#estilo_mensaje').show();
      $("#id_validacion").css("fontSize", 15);                       
      $("#id_validacion").css("font-weight","Bold");     
      $("#estilo_mensaje").attr("class", "panel panel-success");             
      $('#estilo_mensaje').show();$('#id_validacion').show();$('#id_validacion').html('');$('#id_validacion').append('<center><strong><i class="fa fa-thumbs-up" aria-hidden="true"></i> Gracias por haber visto estos increíbles videos..<i class="fa fa-thumbs-up" aria-hidden="true"></i><br>Se te ha enviado el Mini Curso al Email Registrado Anteriormente.</center>');

      $("#estilo_mensaje").fadeTo(15000, 500).slideUp(500, function(){
        $("#estilo_mensaje").hide();  
        $('#MinicursoEnviar').hide();
        location.reload();                                 
      });
    }
  }
});
});


</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Master_Blade_Usuario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>