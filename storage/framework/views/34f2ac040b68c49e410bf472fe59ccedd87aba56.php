<!DOCTYPE html>
<html>
<head>    
  <meta charset="UTF-8">
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
  <title>Genera Ingresos desde la comodidad de tu casa !!</title> 
  <link rel="stylesheet" type="text/css" media="all" href="PanelUsuario/css/screen.css" />
  <link rel="stylesheet" type="text/css" media="all" href="PanelUsuario/css/color_p.css" />
  <link rel="stylesheet" type="text/css" media="all" href="PanelUsuario/css/global_p.css" />
  <link rel="stylesheet" type="text/css" media="all" href="PanelUsuario/css/local_p.css" />
  <link rel="icon" type="image/png" href="PanelUsuario/images/dollar.ico">
  <link href="PanelUsuario/css/bootstrap.min.css" rel="stylesheet">  
  <link rel="stylesheet" href="PanelUsuario/css/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="PanelUsuario/css/EstiloPagina.css">     
  <script type="text/javascript" src="PanelUsuario/js/jquery.min.js" ></script>    
</head>
<body>
  <header id="header" class="wide-container">
    <div class="wrap-container" style="margin-top:12px;">
      <div class="contenedor-logo-superior">
        <img src="PanelUsuario/imagenes/ganardesdecasablanco.png" class="img-logo-resp" height="60"><br>
        <?php if(Auth::check()): ?>
        <!-- <center>
          <font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">Bienvenido,</font> 
          <font size ="4", color ="#00bd70" face="Calibri (Cuerpo)">
            <?php echo e(strtoupper(Auth::user()->nombre_usuario)); ?>,
          </font> 
          <font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">
            a como ganar dinero desde casa   
          </font> 
        </center> --> 
        <?php else: ?>
        <!-- <font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">Bienvenido,</font> 
        <font size ="4", color ="#00bd70" face="Calibri (Cuerpo)">
          Te enseñeare a como ganar dinero desde casa
        </font> 
        <font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">      
        </font> -->
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
      <img src="PanelUsuario/imagenes/LogoPequeno.png" class="img-logo-resp">
      <?php endif; ?>
    </a>
    <nav class="navbar navbar-static-top">
      <a role="button" data-toggle="offcanvas" id="sidebarBtn" class="sidebar-toggle" href="javascript:void(0);">
      </a>
      <div class="navbar-custom-menu">  

      </div>
      <a class="LogueoUsuario myButton fondo-btn-form hvr-bounce-to-right" data-toggle="modal" data-target="#myModal" href="#" data-modal="modal-7">
        ACCEDER
      </a> 
    </nav>
  </header>
  <?php if(Auth::check()): ?>
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
<?php endif; ?>     
<main id="main">
  <!-- SECCION UNO -->
  <section id="registro" style="padding-top: 110px;background:#244a61;">
    <article class="seccion-review" style="padding-left: 5px; padding-right: 5px;">
      <div style="width:70%;float:left;" class="ocultar-titulos-superiores">
        <font size ="4", color ="#ffffff" face="Calibri (Cuerpo)"> 
          GENTE COMO </font><strong><font size ="6", color ="#ffffff" face="Calibri (Cuerpo)"> TÚ</font></strong><font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">  GANANDO MAS</font>
          <font size ="6", color ="#00bd70" face="Calibri (Cuerpo)">  
            <strong>$680.000</strong></font>
            <font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">
              MENSUALES
            </font>
          </div>
          <div style="width: 30%; float: right; text-align: left;padding-left:15px;" class="ocultar-titulos-superiores">
            <h1 class="titulo-sup">
              <span class="tit-desde">SOLO PARA <br>
                <span class="tit-colombia">Colombia</span>
              </span>
            </h1>
          </div>
          <div style="display:block; clear:both"></div>
          <div style="width:100%;float:left;padding-left: 20px; padding-right: 20px;height:30px;" class="mostrar-titulos-superiores">
           <font size ="4", color ="#ffffff" face="Calibri (Cuerpo)"> 
            GENTE COMO </font><strong><font size ="6", color ="#ffffff" face="Calibri (Cuerpo)"> TÚ</font></strong><font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">  GANANDO MAS</font>
            <font size ="6", color ="#00bd70" face="Calibri (Cuerpo)">  
              <strong>$680.000</strong></font>
              <font size ="4", color ="#ffffff" face="Calibri (Cuerpo)">
                MENSUALES
              </font>
            </div>
            <div style="width: 60%; float: right; text-align: left;height:41px;padding-left:5px;" class="mostrar-titulos-superiores">
              <h1 class="titulo-sup">
                <span class="tit-desde">SOLO 
                  <span class="tit-colombia">Colombia</span>
                </span>
              </h1>
            </div>
            <div id="form-container" class="rg contenedor-form-superior" style="float:right;margin-top:30px; display: none;">
              <div class="formSignup">
                <div style="width:100%;height:90px;background:#173546;text-align:center;padding-top:12px;margin-bottom:15px;" class="quitar-info-form">
                  <span style="font-size:14px;color:#ffffff;">
                    NO TE PROMETEMOS EL MUNDO<br> TE LO PONEMOS A TUS PIES.
                  </span>         
                </div>
                <input type="text" name="NombreCliente" id="NombreCliente" class="form-control" style="text-align:center;border-radius: 4px; background: #ffffff; border: 3px solid #555; font-size:15px;height: 50px;" placeholder="Ingresa tu Nombre Completo"><br>
                <input type="text" name="CorreoCliente" id="CorreoCliente" class="form-control" style="text-align:center;border-radius: 4px; background: #ffffff; border: 3px solid #555; font-size:15px;height: 50px;" placeholder="Ingresa tu Correo Electrónico"><br>
                <input type="text" name="WhatAppCliente" id="WhatAppCliente" class="form-control" style="text-align:center;border-radius: 4px; background: #ffffff; border: 3px solid #555; font-size:15px;height: 50px;" placeholder="Ingresa tu Número WhatsApp"><br>
                <br><br><br><br><br>
                <div class="panel panel-default" id="estilo_mensaje" style="display: none;">
                  <div class="panel-heading" id="id_validacion" style="display: none;" >
                  </div>
                </div>
                <center><button class="btn" id="btnRegistroCliente" onclick="valida();" disabled="" style="background-color: #CE1126; display: none;"><font size ="3", color ="#ffffff" face="Calibri (Cuerpo)">>> Quiero Saber más!!</font></button></center>
              </div>
              <div id="progress">
                <div id="bar"></div>
              </div>
              <div id="info">
              </div>
            </div>
            <div id="form-container2" class="rg contenedor-form-superior" style="float:right;margin-top:30px;">
              <div class="formSignup">
                <div style="width:100%;height:90px;background:#173546;text-align:center;padding-top:12px;margin-bottom:15px;" class="quitar-info-form">
                  <span style="font-size:14px;color:#ffffff;">

                  </span>         
                </div>
                <br><br><br><br>
                <font size ="3", color ="#ffffff" face="Calibri (Cuerpo)">
                 <center><strong> ESPERA A QUE <BR>TERMINE ESTE INCREÍBLE VIDEO.</strong></center>
               </font>
               <br><br><br><br><br><br><br><br>
               <center><button class="btn" id="btnRegistroCliente" onclick="valida();" disabled="" style="background-color: #CE1126; display: none;"><font size ="3", color ="#ffffff" face="Calibri (Cuerpo)">>> Quiero Saber más!!</font></button></center>
             </div>
             <div id="progress">
              <div id="bar"></div>
            </div>
            <div id="info">
            </div>
          </div>
          <div class="div-item-review quitar-info-video" style="float:left;margin-top:30px;">
            <div class="video-container video-container-res">
              <video class="video" autoplay="true" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                <source src="PanelUsuario/video/VideoPrincipal.mp4" type="video/mp4">
                </video>
                <div class="playpause"></div> 
                <div class="container-vid"></div>
              </div>
              <div class="clear"></div>
            </div>
          </article>      
        </section>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><font size ="5", color ="#000000" face="Calibri (Cuerpo)">Inicio Sesión</font></h4>
              </div>
              <div class="modal-body">
                <input class="form-control" type="text" name="CorreoUsuario" id="CorreoUsuario" placeholder="Ingresa Correo Electrónico" style="text-align:center;border-radius: 4px;color: white; border: 3px solid #555;font-size:24px;height: 50px; background-color: #000000" onfocus="if (this.hasAttribute('readonly')) {
                  this.removeAttribute('readonly');   
                  this.blur();this.focus();  }" / onkeypress="handle(event)">
                  <input class="form-control" type="text" name="Password" id="Password" placeholder="Ingresa tu Número WhatsApp" style="text-align:center;border-radius: 4px;color: white; border: 3px solid #555;font-size:24px;height: 50px; background-color: #000000" onfocus="if (this.hasAttribute('readonly')) {
                    this.removeAttribute('readonly');   
                    this.blur();this.focus();  }" / onkeypress="handle(event)">

                  </div><br><br><br><br><br>
                  <div class="panel panel-danger" style="display:none" id="Estilo_Mensaje">
                    <div class="panel-heading" id="ID_Validacion" style="display:none">
                    </div>
                  </div>
                  <input type="hidden" name="_token" id="_token" value="<?php echo e(csrf_token()); ?>">
                  <div class="modal-footer">
                    <div class="pull-left" style="display: none" id="DivLoading">
                      <img src="PanelUsuario/images/loading.gif">  
                    </div>          
                    <button type="button" class="btn btn-success IniciarSesion"><font size ="2", color ="#ffffff" face="Calibri (Cuerpo)">Iniciar</font></button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><font size ="2", color ="#ffffff" face="Calibri (Cuerpo)">Cerrar</font></button>

                  </div>
                </div>
              </div>
            </div>   
            <div class="clear" ></div>
            <article class="containers-landing txt-center agregar-clase-100 quitar-item-test" style="margin-top:30px;">
              <div class="pull-right">
                <h4>Total Visitas: <font size ="5", color ="#1abc9c"><label id="ID_contador_Visitas"></label></font> </h4>
              </div>
              <div class="div-de-logos">
                <div class="bloque-grande-logos">       
                  <h1 style="color:#5a5a5a;"><span style="font-size:22px;">RETIRA TU DINERO GANADO EN</span> <span style="font-size:24px;font-weight:700;">
                    PESOS Colombianos                    </span></h1>
                    <div class="contenedor-ext-logos"> 
                      <img src="PanelUsuario/images/Bancos/Davivienda.png"> 
                      <img src="PanelUsuario/images/Bancos/Colpatria.png"> 
                      <img src="PanelUsuario/images/Bancos/BanColombia.png" style="top:-4px;position:relative;">             
                    </div>             
                  </div>
                </article>
                <article class="containers-landing txt-center agregar-clase-100 quitar-item-test" style="margin-top:300px;" >
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
            //   return false;
            // }

            function validar_login(){
              var CorreoUsuario = $('#CorreoUsuario').val();
              var Password = $('#Password').val();
              CorreoUsuarioRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i; 
              var str =  CorreoUsuario;
              var resultado = str.toLowerCase();

              var patron2 =/[0-9]/;
              var WhatAppCliente2 =parseInt($('#Password').val().length);


              if(CorreoUsuario==""){
                $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                $("#ID_Validacion").css("fontSize", 15);          
                $("#ID_Validacion").css("font-weight","Bold");  
                $('#Estilo_Mensaje').show();  
                $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong> El correo no puede estar vacio.</center>');
                $('#ID_Validacion').show();       
                document.getElementById("CorreoUsuario").focus();
                return true;
              }else{
                if (!CorreoUsuarioRegex.test(resultado)){
                  $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                  $("#ID_Validacion").css("fontSize", 15);          
                  $("#ID_Validacion").css("font-weight","Bold");  
                  $('#Estilo_Mensaje').show();   
                  document.getElementById("CorreoUsuario").focus();
                  $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong> La dirección de correo es incorrecta.</center>');
                  $('#ID_Validacion').show();     
                  $('#Estilo_Mensaje').fadeTo(5500, 500).slideUp(500, function(){
                    $('#Estilo_Mensaje').hide();                                   
                  }); 
                  return true;  
                }else{ 
                  if(Password==""){
                    $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                    $("#ID_Validacion").css("fontSize", 15);          
                    $("#ID_Validacion").css("font-weight","Bold");  
                    $('#Estilo_Mensaje').show();   
                    document.getElementById("Password").focus();
                    $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong> El Número WhatsApp no puede estar vacio.</center>');
                    $('#ID_Validacion').show();     
                    $('#Estilo_Mensaje').fadeTo(5500, 500).slideUp(500, function(){
                      $('#Estilo_Mensaje').hide();                                   
                    }); 
                    return true;        
                  }else{
                    if (WhatAppCliente==""){
                      $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                      $("#ID_Validacion").css("fontSize", 15);          
                      $("#ID_Validacion").css("font-weight","Bold");  
                      $('#Estilo_Mensaje').show();   
                      document.getElementById("Password").focus();                 
                      $('#ID_Validacion').html('<center><i class="fa fa-exclamation" aria-hidden="true"></i> ERROR <i class="fa fa-exclamation" aria-hidden="true"></i><br>Debes Ingresar tu Número WhatsApp valido antes de continuar.!!</center>');
                      $('#Estilo_Mensaje').fadeTo(5500, 500).slideUp(500, function(){
                        $('#Estilo_Mensaje').hide();                                   
                      }); 
                      return true;
                    }else{
                      if (WhatAppCliente2!=10){
                        $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                        $("#ID_Validacion").css("fontSize", 15);          
                        $("#ID_Validacion").css("font-weight","Bold");  
                        $('#Estilo_Mensaje').show();    
                        document.getElementById("Password").focus();                 
                        $('#ID_Validacion').html('<center><i class="fa fa-exclamation" aria-hidden="true"></i> ERROR <i class="fa fa-exclamation" aria-hidden="true"></i><br>Debes Ingresar tu Número WhatsApp valido antes de continuar.!!</center>');
                        $('#Estilo_Mensaje').fadeTo(5500, 500).slideUp(500, function(){
                          $('#Estilo_Mensaje').hide();                                   
                        });  
                        return true;
                      }else{
                        if (!/^([0-9])*$/.test(WhatAppCliente2)){
                          $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                          $("#ID_Validacion").css("fontSize", 15);          
                          $("#ID_Validacion").css("font-weight","Bold");  
                          $('#Estilo_Mensaje').show();   
                          document.getElementById("Password").focus();                 
                          $('#ID_Validacion').html('<center><i class="fa fa-exclamation" aria-hidden="true"></i> ERROR <i class="fa fa-exclamation" aria-hidden="true"></i><br>Debes Ingresar tu Número WhatsApp valido antes de continuar.!!</center>');
                          $('#Estilo_Mensaje').fadeTo(5500, 500).slideUp(500, function(){
                            $('#Estilo_Mensaje').hide();                                   
                          });
                          return true;
                        }else{
                          $("#Estilo_Mensaje").hide();
                          $('#ID_Validacion').hide();
                          return false;
                        }
                      }
                    }
                  }
                }
              }
            }

            $('.IniciarSesion').click(function(){
              if(validar_login()==true){
              }else{
                var CorreoUsuario =$('#CorreoUsuario').val();
                var Password =$('#Password').val();
                var _token=$('#_token').val();

                $.ajax({
                  url   : "<?= URL::to('Login') ?>",
                  type  : "POST",
                  async : false,   
                  data  :{
                    '_token'  : _token,
                    'CorreoUsuario'   : CorreoUsuario,
                    'Password': Password
                  },    
                  success:function(data){           
                    if(data.error==false){
                      $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                      $("#ID_Validacion").css("fontSize", 10);          
                      $("#ID_Validacion").css("font-weight","Bold");  
                      $('#Estilo_Mensaje').show();  
                      $.each(data.errors,function(index, error){                 
                        $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong>'+error+'</center>');
                        $('#ID_Validacion').show();
                      });    

                    }          
                    if(data.ErrorEnPass==false){ 
                      $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                      $("#ID_Validacion").css("fontSize", 10);          
                      $("#ID_Validacion").css("font-weight","Bold");  
                      $('#Estilo_Mensaje').show(); 
                      $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong>'+data.errors+'</center>');
                      $('#ID_Validacion').show();         
                    }
                    if(data=='ok'){
                      $('#Estilo_Mensaje').hide();
                      $('#ID_Validacion').hide(); 
                      Actualizar_Fecha_Ultimo_Ingreso(); 
                      $('#DivLoading').show();
                      window.setTimeout('document.location.href = "<?php echo e(route('VideoPasos')); ?>"',3000);
                      console.clear(); 
                    }
                    if(data.ErrorExiste==false){        
                      $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                      $("#ID_Validacion").css("fontSize", 10);          
                      $("#ID_Validacion").css("font-weight","Bold");  
                      $('#Estilo_Mensaje').show(); 
                      $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong>'+data.errors+'</center>');
                      $('#ID_Validacion').show();         
                    } 
                  }
                });      
              }
            });

            function Loguearse(){
              var CorreoUsuario =$('#CorreoUsuario').val();
              var Password =$('#Password').val();
              var _token=$('#_token').val();

              $.ajax({
                url   : "<?= URL::to('Login') ?>",
                type  : "POST",
                async : false,   
                data  :{
                  '_token'  : _token,
                  'CorreoUsuario'   : CorreoUsuario,
                  'Password': Password
                },    
                success:function(data){           
                  if(data.error==false){
                    $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                    $("#ID_Validacion").css("fontSize", 10);          
                    $("#ID_Validacion").css("font-weight","Bold");  
                    $('#Estilo_Mensaje').show();  
                    $.each(data.errors,function(index, error){                 
                      $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong>'+error+'</center>');
                      $('#ID_Validacion').show();
                    });    

                  }          
                  if(data.ErrorEnPass==false){ 
                    $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                    $("#ID_Validacion").css("fontSize", 10);          
                    $("#ID_Validacion").css("font-weight","Bold");  
                    $('#Estilo_Mensaje').show(); 
                    $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong>'+data.errors+'</center>');
                    $('#ID_Validacion').show();         
                  }
                  if(data=='ok'){
                    $('#Estilo_Mensaje').hide();
                    $('#ID_Validacion').hide(); 
                    Actualizar_Fecha_Ultimo_Ingreso(); 
                    $('#DivLoading').show();
                    window.setTimeout('document.location.href = "<?php echo e(route('VideoPasos')); ?>"',3000);
                    console.clear(); 
                  }
                  if(data.ErrorExiste==false){        
                    $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                    $("#ID_Validacion").css("fontSize", 10);          
                    $("#ID_Validacion").css("font-weight","Bold");  
                    $('#Estilo_Mensaje').show(); 
                    $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong>'+data.errors+'</center>');
                    $('#ID_Validacion').show();         
                  } 
                }
              }); 
            }



            function Actualizar_Fecha_Ultimo_Ingreso(){   
              $.ajax({
                url   : "<?= URL::to('Actualizar_Ultima_Conexion_Usuario') ?>",
                type  : "GET",
                async : false,          
                success:function(data){     
                }
              }); 
            }          


            function valida(){
              var NombreCliente=$('#NombreCliente').val();
              var CorreoCliente=$('#CorreoCliente').val();
              var WhatAppCliente=$('#WhatAppCliente').val();
              var WhatAppCliente2 =parseInt($('#WhatAppCliente').val().length);
              var NombreCliente2  =parseInt($('#NombreCliente').val().length);
              var patron =/[a-z,A-Z]/;
              var patron2 =/[0-9]/;
              var patron3 = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;



        // if (emailRegex.test(campo.value)) {

          if(!patron.test(NombreCliente)){
            $('#estilo_mensaje').show();
            $("#id_validacion").css("fontSize", 15);                       
            $("#id_validacion").css("font-weight","Bold");     
            $("#estilo_mensaje").attr("class", "panel panel-danger");
            $('#id_validacion').show();  
            document.getElementById("NombreCliente").focus();    
            $('#NombreCliente').val('');
            $('#id_validacion').html('<center><i class="fa fa-exclamation" aria-hidden="true"></i> ERROR <i class="fa fa-exclamation" aria-hidden="true"></i><br>Debes proporcionarnos tu nombre completo antes de continuar.!!</center>');
            $("#estilo_mensaje").fadeTo(5500, 500).slideUp(500, function(){
              $("#estilo_mensaje").hide();                                   
            });
          }else{
            if (NombreCliente2<=7){
              $('#estilo_mensaje').show();
              $("#id_validacion").css("fontSize", 15);                       
              $("#id_validacion").css("font-weight","Bold");     
              $("#estilo_mensaje").attr("class", "panel panel-danger");
              $('#id_validacion').show();  
              document.getElementById("NombreCliente").focus();              
              $('#id_validacion').html('<center><i class="fa fa-exclamation" aria-hidden="true"></i> ERROR <i class="fa fa-exclamation" aria-hidden="true"></i><br>Porfavor proporcionarnos tu nombre completo para poder continuar.!!</center>');
              $("#estilo_mensaje").fadeTo(5500, 500).slideUp(500, function(){
                $("#estilo_mensaje").hide();                                   
              });
            }else{
              if(!patron3.test(CorreoCliente)){
                $('#estilo_mensaje').show();
                $("#id_validacion").css("fontSize", 15);                       
                $("#id_validacion").css("font-weight","Bold");     
                $("#estilo_mensaje").attr("class", "panel panel-danger");
                $('#id_validacion').show();   
                document.getElementById("CorreoCliente").focus();                 
                $('#id_validacion').html('<center><i class="fa fa-exclamation" aria-hidden="true"></i> ERROR <i class="fa fa-exclamation" aria-hidden="true"></i><br>Debes proporcionarnos un correo electrónico valido antes de continuar.!!</center>');
                $("#estilo_mensaje").fadeTo(5500, 500).slideUp(500, function(){
                  $("#estilo_mensaje").hide();                                   
                }); 
              }else{
                if (WhatAppCliente==""){
                  $('#estilo_mensaje').show();
                  $("#id_validacion").css("fontSize", 15);                       
                  $("#id_validacion").css("font-weight","Bold");     
                  $("#estilo_mensaje").attr("class", "panel panel-danger");
                  $('#id_validacion').show();   
                  document.getElementById("WhatAppCliente").focus();                 
                  $('#id_validacion').html('<center><i class="fa fa-exclamation" aria-hidden="true"></i> ERROR <i class="fa fa-exclamation" aria-hidden="true"></i><br>Debes proporcionarnos tu número WhatsApp valido antes de continuar.!!</center>');
                  $("#estilo_mensaje").fadeTo(5500, 500).slideUp(500, function(){
                    $("#estilo_mensaje").hide();                                   
                  }); 
                }else{
                  if (WhatAppCliente2!=10){
                    $('#estilo_mensaje').show();
                    $("#id_validacion").css("fontSize", 15);                       
                    $("#id_validacion").css("font-weight","Bold");     
                    $("#estilo_mensaje").attr("class", "panel panel-danger");
                    $('#id_validacion').show();   
                    document.getElementById("WhatAppCliente").focus();                 
                    $('#id_validacion').html('<center><i class="fa fa-exclamation" aria-hidden="true"></i> ERROR <i class="fa fa-exclamation" aria-hidden="true"></i><br>Tu número WhatsApp debe ser valido antes de continuar.!!</center>');
                    $("#estilo_mensaje").fadeTo(5500, 500).slideUp(500, function(){
                      $("#estilo_mensaje").hide();                                   
                    }); 
                  }else{
                    if (!/^([0-9])*$/.test(WhatAppCliente)){
                      $('#estilo_mensaje').show();
                      $("#id_validacion").css("fontSize", 15);                       
                      $("#id_validacion").css("font-weight","Bold");     
                      $("#estilo_mensaje").attr("class", "panel panel-danger");
                      $('#id_validacion').show();   
                      document.getElementById("WhatAppCliente").focus();                 
                      $('#id_validacion').html('<center><i class="fa fa-exclamation" aria-hidden="true"></i> ERROR <i class="fa fa-exclamation" aria-hidden="true"></i><br>Debes proporcionarnos tu número WhatsApp valido antes de continuar.!!</center>');
                      $("#estilo_mensaje").fadeTo(5500, 500).slideUp(500, function(){
                        $("#estilo_mensaje").hide();                                   
                      }); 
                    }else{
                      $("#estilo_mensaje").hide(); 
                      Registrarse(); 
                    }
                  }
                }
              }
            }
          }
        }

        function Registrarse(){
          var NombreCliente=$('#NombreCliente').val();
          var CorreoCliente=$('#CorreoCliente').val();
          var WhatAppCliente=$('#WhatAppCliente').val();

          $.ajax({
            type:'get',     
            url:'<?php echo e(url('RegistrarUsuario')); ?>',
            data:{
              'NombreCliente':NombreCliente,
              'CorreoCliente':CorreoCliente,
              'WhatAppCliente':WhatAppCliente
            },
            success: function(data){ 
              if(data==0){
                $('#id_validacion').html('');
                $('#estilo_mensaje').show();
                $("#id_validacion").css("fontSize", 15);                       
                $("#id_validacion").css("font-weight","Bold");     
                $("#estilo_mensaje").attr("class", "panel panel-success");             
                window.setTimeout(function(){$('#estilo_mensaje').show();$('#id_validacion').show();$('#id_validacion').html('');$('#id_validacion').append('<center><strong>Estamos validando tu cuenta...</center>');},3000);
                $('#estilo_mensaje').show();$('#id_validacion').show();$('#id_validacion').html('');$('#id_validacion').append('<center><strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> GRACIAS por estar aquí... <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></center>');
                Logueo();
              }else{
                if(data.error==false){
                  $('#id_validacion').html('');
                  $('#estilo_mensaje').show();
                  $("#id_validacion").css("fontSize", 15);                       
                  $("#id_validacion").css("font-weight","Bold");     
                  $("#estilo_mensaje").attr("class", "panel panel-danger");
                  $('#id_validacion').show();   
                  document.getElementById("WhatAppCliente").focus(); 
                  $.each(data.errors,function(index, error){
                    $('#id_validacion').append('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong>'+error+'</center>');
                    $('#id_validacion').show();
                    $("#estilo_mensaje").fadeTo(5500, 500).slideUp(500, function(){
                      $("#estilo_mensaje").hide();                                   
                    }); 
                  });
                }
              }   
            }         
          });
        }


        function Logueo(){   
          var _token=$('#_token').val();

          var CorreoCliente=$('#CorreoCliente').val();
          var WhatAppCliente=$('#WhatAppCliente').val();


          $.ajax({
            url   : "<?= URL::to('Login') ?>",
            type  : "POST",
            async : false,   
            data  :{
              '_token'          : _token,
              'CorreoUsuario'   : CorreoCliente,
              'Password'        : WhatAppCliente
            },    
            success:function(data){  

              if(data.error==false){
                $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                $("#ID_Validacion").css("fontSize", 15);          
                $("#ID_Validacion").css("font-weight","Bold");  
                $('#Estilo_Mensaje').show();  
                $.each(data.errors,function(index, error){                 
                  $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong>'+error+'</center>');
                  $('#ID_Validacion').show();
                });    

              }          
              if(data.ErrorEnPass==false){ 
                $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                $("#ID_Validacion").css("fontSize", 15);          
                $("#ID_Validacion").css("font-weight","Bold");  
                $('#Estilo_Mensaje').show(); 
                $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong>'+data.errors+'</center>');
                $('#ID_Validacion').show();         
              }
              if(data=='ok'){
                $('#Estilo_Mensaje').hide();
                $('#ID_Validacion').hide(); 
                // Actualizar_Fecha_Ultimo_Ingreso(); 
                // $('#DivLoading').show();
                window.setTimeout('document.location.href = "<?php echo e(route('VideoPasos')); ?>"',6000);
                console.clear(); 
              }
              if(data.ErrorExiste==false){        
                $("#Estilo_Mensaje").attr("class", "panel panel-danger");
                $("#ID_Validacion").css("fontSize", 15);          
                $("#ID_Validacion").css("font-weight","Bold");  
                $('#Estilo_Mensaje').show(); 
                $('#ID_Validacion').html('<center><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>¡¡ ERROR ¡!<br> </strong>'+data.errors+'</center>');
                $('#ID_Validacion').show();         
              } 
            }
          }); 
        }

        $('.video').parent().ready(function() {
          $(".playpause").fadeOut();
          document.getElementById("NombreCliente").focus();  
        });

        $('.video').parent().click(function () {
          if($(this).children(".video").get(0).paused){
            $(this).children(".video").get(0).play();
            $(this).children(".playpause").fadeOut();
            timer.start();
          }else{
            $(this).children(".video").get(0).pause();
            $(this).children(".playpause").fadeIn();
            timer.pause();
          }
        });

   //Constructor
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

          // info.innerHTML = 'elapsed: ' + self.elapsed +  
          // '<br />remaining: ' + self.remaining +
          // '<br />delay: ' + self.delay +
          // '<br />percent: ' + percent + '%';

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


var timer = new Timer(function() {
  info.innerHTML += '';
  // alert('ACABO');
  window.setTimeout(function(){document.getElementById('btnRegistroCliente').disabled=false;},150);
  $('#form-container2').hide();
  $('#btnRegistroCliente').show();
  $('#form-container').show();
// }, 1);
// }, 1685);
}, 10);
timer.start();

</script>

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

  $('.LogueoUsuario').click(function(){
    window.setTimeout(function(){$('#CorreoUsuario').focus();},1000);

  });

  function handle(e){
    if(e.keyCode === 13){
            e.preventDefault(); // Ensure it is only this code that rusn
            if(validar_login()==true){
            }else{
             Loguearse();
           }            
         }
       }
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