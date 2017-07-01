<?php

namespace PaginaProspecion\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Redirect;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::check()){
                $rol_usuario=Auth::user()->rol_usuario;     
                $registro_video=Auth::user()->registro_video;    


                if($rol_usuario!=2){
                    return Redirect::to('Panel_Admin');                   
                }else{
                    if($registro_video!=4){                 
                        return Redirect::to('VideoPasos');                  
                    }else{                              
                        return Redirect::to('Dashboard');                                      
                    }           
                }                
            }
        }else{  

          return Redirect::to('/');;
        }    

        return $next($request);
    }
}
