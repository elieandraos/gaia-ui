<?php namespace Gaia\Ui;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//dd( Auth::user()->hasRole('administrator'));
		return view('admin.dashboard.index');
	}

}
