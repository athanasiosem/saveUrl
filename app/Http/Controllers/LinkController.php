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
		// only loggedin users can post links
		if (Auth::user()){

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

/*			return redirect('home')->withMessage('Link added!');;*/
		}
	}

	public function deleteLink(Request $request)
	{
		// delete link if only the link belongs to the loggedin user
		$linkId = $request->get('id');
		$linkObject = Link::find($linkId);
		$linkObjectUserId = $linkObject->user_id;

		if ($linkObjectUserId == Auth::user()->id)
		{
			$linkObject->delete();
		}

	}
}
