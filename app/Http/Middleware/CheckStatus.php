<?php
/**
 * Short description for file
 *
 * @FileName        CheckRole.php
 * @Created On      21 May 2018
 * @author          Dinesh Kumar <dinesh.kumar@srmtechsol.com>
 * @copyright       2017-2018 The PHP Group
 * @license         http://www.php.net
 * @Description     Middleware CheckRole
 */
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {  
        $response = $next($request); //echo Auth::user()->role_id; die;
        //If the status is not approved redirect to login 
        if(Auth::check() && (Auth::user()->is_profile_deleted=='1')){
            Auth::logout();
            return redirect('/login')->with('error', 'Your account has been deleted. Please contact website adminstrator.');
        }
        if(Auth::check() && (Auth::user()->role_id=='3')){
            Auth::logout();
            return redirect('/login')->with('error', 'You are not authorized to access this account.');
        }
        if(Auth::check() && (Auth::user()->status != '1')) {
            Auth::logout();
            return redirect('/login')->with('error', 'Your account is either inactive or suspended. Please contact website adminstrator.');
        }
        return $response;
    }
}
