<?php namespace App\Http\Controllers;

use Input;
use DB;
use Auth;
use App\Link;
use Illuminate\Http\Request;

class LinkController extends Controller {

	public function postlink()
	{
		return view('link.index');
	}


	public function postlinkPOST(Request $request)
	{

		// Validate the Input
		$this->validate($request, [
			'link' => 'required|url',
			'description' => 'required'
		]);

		// Do stuff if validation is success

		$linkObject = new Link;
		$linkObject->url = $request->get('link');
		$linkObject->description = $request->get('description');
		$linkObject->user_id = Auth::user()->id;
		$linkObject->save();

		/*
		DB way of doing insert

		DB::table('links')->insert(
			['url' => $link, 'description' => $description]);
		*/


		return redirect('home')->withMessage('Link added!');;

	}

	public function deleteLink(Request $request)
	{

		$linkObject = Link::find($request->get('id'));
		$linkObject->delete();

	}

}
