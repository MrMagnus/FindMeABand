<?php

class SessionsController extends \BaseController {

	/**
	 * Creates a Auth session and redirect the user to its profile
	 * if the user input is correct. Otherwise rediret the user to
	 * the home page.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$input = Input::all();

		$attempt = Auth::attempt([
									'email' => $input['email'],
									'password' => $input['password']	
									]);

		if($attempt){
			return Redirect::route('user_profile');
		} else{
			return Redirect::route('home');
		}		

	}

	/**
	 * Desroy the Auth session and redirects the user to the home page.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy() {

		Auth::logout();

		return Redirect::route('home');
	}


}
