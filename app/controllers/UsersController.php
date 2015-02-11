<?php

class UsersController extends BaseController {

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

		$user = User::whereId(Auth::id())->first();

		return View::make('users.profile', compact('user'));
	}




}
