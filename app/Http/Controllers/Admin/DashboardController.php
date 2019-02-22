<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use DB;


class DashboardController extends Controller
{
    public function adminDashboard()
    {
        $data['page'] = 'Admin Bashboards';
        //$data['template'] = 'admin.home.dashboard';
        //$data['results'] = Boards::all();
        return view('admin.home.dashboard', compact('data'));
    }

    
}