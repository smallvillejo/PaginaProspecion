<?php

namespace PaginaProspecion\Http\Controllers\ControllerIndex;

use Illuminate\Http\Request;
use PaginaProspecion\Http\Controllers\Controller;
use PaginaProspecion\Models\Users\Usuario_Modelo;
use Illuminate\Support\Facades\Input;
use Response;
use Illuminate\Support\Facades\Validator;
use DB;
use View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\UserTrait;
use Hash;
use Carbon\Carbon;
use File;
use Redirect;
use Mail;

class IndexController extends Controller{

	public function __construct(){
		Carbon::setLocale('es');	
	}


	public function Salir()	{
		Auth::logout();
		return Redirect::to('/');

	}

	public function PintarVista($nombre){
		$ConsultarUsuario=Usuario_Modelo::Where('nombre_usuario',$nombre)->get();

		// dd($ConsultarUsuario);

		foreach ($ConsultarUsuario as $key => $value) {
			$nombre_usuario=$value->nombre_usuario;
			$nombre_cliente=ucfirst($value->nombre_cliente);
			$correo_cliente=ucfirst($value->correo_cliente);
			$telefono_cliente=$value->telefono_cliente;

		}

		$telefono_cliente = substr($telefono_cliente ,0, 3)."-".substr($telefono_cliente ,3, 3)."-".substr($telefono_cliente ,6, 4); 

		if($ConsultarUsuario=="[]"){
			// return Redirect::to('http://www.ganardesdecasa.co/');
			return view('Index.Pagina_No_Encontrada');

		}else{
			return view('Index.Principal')
			->with('nombre_usuario',$nombre_usuario)
			->with('nombre_cliente',$nombre_cliente)
			->with('correo_cliente',$correo_cliente)
			->with('telefono_cliente',$telefono_cliente);
			
		}
		
	}

}

