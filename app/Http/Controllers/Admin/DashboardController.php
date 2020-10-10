<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\HomeConfiguration;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Department;
use Config;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Session;
use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

	protected $ModuleSlug 		= 'dashboard';
	 
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ModuleSlug					=	 'Dashboard';
        return view('admin.dashboard',compact('ModuleSlug'));
    }

}
