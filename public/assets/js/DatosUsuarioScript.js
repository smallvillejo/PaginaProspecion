// Aqui van todos los datos del usuario que se va a Referenciar

var NombreUsuario="Guillermo Aranda Gomez"
var NombreUsuer="colombiagratis"
var CorreoUser="Cabiweb@hotmail.com"
var TelefonoUser="304-632-9771"
var EnlaceReferido="http://cli.ckea.me/?ref="+NombreUsuer;	

$('.NombreUsuario').text(NombreUsuario);
$('.NombreUsuer').text(NombreUsuer);
$('.CorreoUser').text(CorreoUser);
$('.TelefonoUser').text(TelefonoUser);
$('#TituloID').text(NombreUsuer +' - Gana dinero haciendo Clicks');
$('.Registro').click(function(){
	location.href = EnlaceReferido;
});
$('.Registrarse').click(function(){
	location.href = EnlaceReferido;
});
$('.Conferencia').click(function(){
	location.href = "https://zoom.us/j/997782538";
});

// Termina Aqui van todos los datos del usuario que se va a Referenciar

// Clases para activar Modal de camara y coemrcio  y datos del usuario
$('.CamaraComercio').click(function(){								
	$('#Modal_CamaraComercio').modal('show');
});

$('.EnlaceReferidoo').click(function(){							
	location.href = EnlaceReferido;
});




