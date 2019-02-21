<?php
/**
 * Short description for file
 *
 * @FileName		CheckRole.php
 * @Created On		21 May 2018
 * @author			Dinesh Kumar <dinesh.kumar@srmtechsol.com>
 * @copyright		2018-2019 The PHP Group
 * @license			http://www.php.net
 * @Description		Middleware CheckRole
 */
namespace App\Http\Middleware;
// First copy this file into your middleware directoy
use Auth;
use Closure;
use DB;
use Session;

class CheckRole {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		// Get the required roles from the route
		$roles = $this->getRequiredRoleForRoute($request->route());
		// Check if a role is required for the route, and
		// if so, ensure that the user has that role.


    
		if ($request->user()->hasRole($roles) || !$roles){
			return $next($request);
		}
		if (Auth::user()->hasRoles('Admin')){		
			return redirect('admin-dashboard')->with('error', 'You are not authorized to access this resource.');
		} 
		elseif (Auth::user()->hasRoles('User')){		
			return redirect('user-dashboard')->with('error', 'You are not authorized to access this resource.');
		} 
		else {
			return redirect('/')->with('error', 'You are not authorized to access this resource.');
		}
	}
	private function getRequiredRoleForRoute($route) {
		$actions = $route->getAction();
		return isset($actions['roles']) ? $actions['roles'] : null;
	}
}
