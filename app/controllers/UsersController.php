<?php

class UsersController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index(){
		
		if (View::exists('users.profile')){
    	return 'den finns';
		}

		return 'nope';
	}

	/**
	* Show the user profile.
	*
	*/
	public function show_profile(){

		return View::make('users.profile');
	}



}
