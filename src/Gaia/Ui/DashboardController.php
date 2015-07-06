<?php namespace Gaia\Ui;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Gaia\Repositories\PostTypeRepositoryInterface;
use Auth;
use View;

class DashboardController extends Controller {

	protected $postTypeRepositoryInterface;

	public function __construct(PostTypeRepositoryInterface $postTypeRepositoryInterface)
	{
		//share the post type submenu to the layout
		$this->postTypeRepos = $postTypeRepositoryInterface;
		View::share('postTypesSubmenu', $this->postTypeRepos->renderMenu());
	}


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
