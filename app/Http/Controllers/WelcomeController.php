<?php namespace App\Http\Controllers;

use App\Link;
use DB;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// sql query to get database size{}

		$dataSize = DB::select('SELECT round(((data_length + index_length))) "size"
		 FROM information_schema.TABLES
		 WHERE table_schema = "saveurl" AND table_name = "links"');

		$numberOfLinks = Link::all()->count();
		return view('welcome')->with('numberOfLinks',$numberOfLinks)->with('dataSize',$dataSize[0]->size);
	}

}
