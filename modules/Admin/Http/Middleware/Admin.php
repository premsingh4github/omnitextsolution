<?php namespace Modules\Admin\Http\Middleware; 

use Closure;

class Admin {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
       if($request->user()){
        if ($request->user()->type == 1)
        {
            return $next($request);
        }
        return redirect('admin/login');
       }
       return redirect('admin/login'); 
    	
    }
    
}
