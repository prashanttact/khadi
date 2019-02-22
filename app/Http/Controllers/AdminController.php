<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
use Hash;
use Session;
Use Cookie;

class AdminController extends Controller {

	public function admin_home() {

        $email = Cookie::get('adminEToken');
        $pass = Cookie::get('adminPToken');

        if($email!="" && $pass!=""){

            $response = $this->verifyUserRememberLogin($email, $pass);

            if($response == 'true'){

                return redirect('admin-dashboard');

            }else{

                Cookie::queue(Cookie::forget('adminEToken'));
                Cookie::queue(Cookie::forget('adminPToken'));
                $data['page']='Admin Login';
                Auth::logout();
                return view('admin.home.index', compact('data'));

            }

        }else{

            Cookie::queue(Cookie::forget('adminEToken'));
            Cookie::queue(Cookie::forget('adminPToken'));
    		$data['page']='Admin Login';
            Auth::logout();
            return view('admin.home.index', compact('data'));

        }
    }

	public function index() {		
       if(Auth::User())
		{
			 $id = Auth::user()->id;
             $user = User::find($id);
             if($user->role_id==1){
             	return redirect('/admin-dashboard');
             	exit;  
             }
            			
		}		 
		return view('admin.home.index');	
	} 

	public function login() { 	        
      if(Auth::User())
		{
			 $id = Auth::user()->id;
             $user = User::find($id);
             if($user->role_id==1){
	             return redirect('/admin-dashboard');
	             exit;  
             }
            			
		}
		return view('admin.home.index');	
	}
    /*
	public function dashboard()
    {
        $data['page'] = 'View Boards';
        $data['template'] = 'admin.Boards.view';
        $data['results'] = Boards::all();
        return view('admin.includes.page', compact('data'));
    }
    */
	public function logout() {
        Auth::logout();
        Session::flush();
        Cookie::queue(Cookie::forget('adminEToken'));
        Cookie::queue(Cookie::forget('adminPToken'));
        return redirect('admin-login'); //->action('Auth\LoginController@index');
    }



      public function showChangePasswordForm(){
        $data['page'] = 'View change';
        $data['template'] = 'admin/changepassword';
       
        return view('admin/includes/page', compact('data'));
    }

    public function changePassword(Request $request){


          $this->validate($request, [
               'password'       => 'required',
               'cpassword'       => 'required|same:password'
            ]);

            $user = Auth::user();
            if($request->get('cpassword') == $request->get('password'))
            {
                User::where('id', $user->id)->update(array('password'=>Hash::make($request->get('cpassword'))));
                return redirect()->back()->with("success","Password changed successfully !");
            }
            else
            {
                return redirect()->back()->with("error","Password not Matched !");

            }
            
    }

    public function verifyUserRememberLogin($email, $pass){

        if(Auth::attempt(array('email'=>$email,'password'=>$pass), 1)){

            Cookie::queue('adminEToken', $email, 120);
            Cookie::queue('adminPToken', $pass, 120);

            return 'true';

        }else{

            return 'false';

        }

    }

}
