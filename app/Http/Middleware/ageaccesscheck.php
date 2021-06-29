<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ageaccesscheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // Used to check id global middleware is active on all pages
        // echo "<h1>Middleware check</h1>";
       
        // Codition statement to check to check if age meets the requirement to have access to the home page
        //To if statement is working Type: /?age=10  ****In the url of***
        
        if($request->age && $request->age<18){
            return redirect('restrict');
        }
      
        return $next($request);

       

    }
}
